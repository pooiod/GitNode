<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?> <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitNode</title>
    <link rel="icon" type="image/png" href="/icon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <meta name="description" content="GitNode - Test Node.js GitHub projects directly in your browser without a server.">
    <meta name="author" content="pooiod7">
    <meta property="og:title" content="GitNode">
    <meta property="og:description" content="Test Node.js GitHub projects in your browser instantly with GitNode.">
    <style>
        body {
            background-color: white;
            margin: 0px;
            padding 0px;
            height: 100vh;
        }
        iframe {
            position: fixed;
            width: 100%;
            height: 100%;
            border: 0px;
            margin: 0px;
            padding: 0px;
            top: 0px;
            left: 0px;
        }
    </style>
</head>
<body>
    <iframe id="output"src="data:text/html;base64,RG93bmxvYWRpbmcgcmVwb3NpdG9yeQoKPHNjcmlwdD4Kd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoIm1lc3NhZ2UiLGU9PntsZXQgdD1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJiciIpOwpsZXQgZD1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJwIik7CmQudGV4dENvbnRlbnQ9KGUuZGF0YSksZG9jdW1lbnQuYm9keS5hcHBlbmRDaGlsZChkKTsKd2luZG93LnNjcm9sbFRvKDAsIGRvY3VtZW50LmJvZHkuc2Nyb2xsSGVpZ2h0KTt9KTsKPC9zY3JpcHQ+Cg=="></iframe>

    <script type="module">
    import { WebContainer } from 'https://unpkg.com/@webcontainer/api';
    let webcontainerInstance;
    
    var data;
        async function fetchAndProcessZip() {
            var apiUrl = "/api/get/index.php?rep="+(window.location.pathname.slice(1) || "pooiod/NodeHome");
            try {
                const response = await fetch(apiUrl);
                var fol = 0;
                if (response.ok) {
                    data = await response.arrayBuffer();
                    const zip = new JSZip();
                    const zipContents = await zip.loadAsync(data);
                    const fileData = {};

                    // Recursively process each entry in the zip file
                    async function processZipEntry(zipEntry, path) {
                        console.log(zipEntry.name);
                        document.querySelector('iframe').contentWindow.postMessage(zipEntry.name, '*');
                        const fullPath = path + zipEntry.name;
                        if (zipEntry.dir) {
                            // fileData[fullPath] = { directory: {} };
                        } else {
                            const fileContents = await zip.file(fullPath).async("string");
                            const pathParts = fullPath.split('/').filter(Boolean);
                            let currentLevel = fileData;

                            // Create a structure for nested directories
                            for (let i = 0; i < pathParts.length - 1; i++) {
                                const part = pathParts[i];
                                if (!currentLevel[part]) {
                                    currentLevel[part] = { directory: {} };
                                }
                                currentLevel = currentLevel[part].directory;
                            }

                            // Add file contents to the correct place in the structure
                            currentLevel[pathParts[pathParts.length - 1]] = {
                                file: {
                                    contents: fileContents
                                }
                            };
                        }
                    }

                    // Start processing from the root
                    for (let relativePath in zipContents.files) {
                        const zipEntry = zipContents.files[relativePath];
                        await processZipEntry(zipEntry, '');
                    }

                    // Display the JSON in the textarea
                    data = fileData[Object.keys(fileData)[0]];
                    data = data[Object.keys(data)[0]];
                    
                    // document.querySelector('iframe').contentWindow.postMessage(JSON.stringify(data, null, 2), '*');
                } else {
                    document.querySelector('iframe').contentWindow.postMessage(esponse.status, '*');
                    console.warn(response.status);
                }
            } catch (error) {
                document.querySelector('iframe').contentWindow.postMessage(error.message, '*');
                console.error(error.message);
            }
        }

        window.addEventListener('load', async () => {
            await fetchAndProcessZip();
            var files = data;
            window.files = files;
            
            document.querySelector('iframe').contentWindow.postMessage("Prompting server", '*');
            
            // Call only once
            webcontainerInstance = await WebContainer.boot();
            await webcontainerInstance.mount(files);
    
            const exitCode = await installDependencies();
            if (exitCode !== 0) {
                document.querySelector('iframe').contentWindow.postMessage("Server failed to install", '*');
                throw new Error('Installation failed');
            };
    
            startDevServer();
        });
        
        window.addEventListener("message",event=>{
            try {
                if ("js" in event.data) {
                    eval(event.data.js);
                }
            } catch(error) {
                error = error;
            }
        });
        
        async function installDependencies() {
            // Install dependencies
            const installProcess = await webcontainerInstance.spawn('npm', ['install']);
            installProcess.output.pipeTo(new WritableStream({
              write(data) {
                document.querySelector('iframe').contentWindow.postMessage(data, '*');
                console.log(data);
              }
            }))
            // Wait for install command to exit
            return installProcess.exit;
        }
        
        async function startDevServer() {
            document.querySelector('iframe').contentWindow.postMessage("npm run start", '*');
            
            // Run `npm run start` to start the Express app
            await webcontainerInstance.spawn('npm', ['run', 'start']);
            
            document.querySelector('iframe').contentWindow.postMessage("Opening server port", '*');
            
            window.webcontainerInstance = webcontainerInstance;
            
            // Wait for `server-ready` event
            webcontainerInstance.on('server-ready', (port, url) => {
            document.querySelector('iframe').contentWindow.postMessage("Page ready", '*');
                document.querySelector('iframe').src = url;
                console.log("page loaded");
            });
        }
    </script>
</body>
</html>
