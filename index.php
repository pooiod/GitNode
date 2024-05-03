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
    <meta name="keywords" content="GitNode, Node.js, GitHub, browser, JavaScript">
    <meta name="author" content="pooiod7">
    <meta property="og:title" content="GitNode">
    <meta property="og:description" content="Test Node.js GitHub projects in your browser instantly with GitNode.">
    <script>window.parent.postMessage({url:window.location.pathname}, '*');</script>
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
    <iframe id="output"src="data:text/html;base64,PCFkb2N0eXBlIGh0bWw+CjxodG1sPgogIDxoZWFkPgogICAgPHN0eWxlPgogICAgICBib2R5ewogICAgICAgIG1hcmdpbjogMHB4OwogICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMyMjI7CiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjsKICAgICAgfQogICAgICAjdGVybWluYWwgewogICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMxMTE7CiAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgIGhlaWdodDogMTAwJSAhaW1wb3J0YW50OwogICAgICAgIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7CiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjsKICAgICAgfQogICAgICAueHRlcm0gewogICAgICAgICAgY3Vyc29yOiB0ZXh0OwogICAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlOwogICAgICAgICAgdXNlci1zZWxlY3Q6IG5vbmU7CiAgICAgICAgICAtbXMtdXNlci1zZWxlY3Q6IG5vbmU7CiAgICAgICAgICAtd2Via2l0LXVzZXItc2VsZWN0OiBub25lOwogICAgICAgICAgaGVpZ2h0OiAxMDAlICFpbXBvcnRhbnQ7CiAgICAgICAgICBvdmVyZmxvdzogaGlkZGVuOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0uZm9jdXMsCiAgICAgIC54dGVybTpmb2N1cyB7CiAgICAgICAgICBvdXRsaW5lOiBub25lOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLnh0ZXJtLWhlbHBlcnMgewogICAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgICAgdG9wOiAwOwogICAgICAgICAgLyoqCiAgICAgICAgICAgKiBUaGUgei1pbmRleCBvZiB0aGUgaGVscGVycyBtdXN0IGJlIGhpZ2hlciB0aGFuIHRoZSBjYW52YXNlcyBpbiBvcmRlciBmb3IKICAgICAgICAgICAqIElNRXMgdG8gYXBwZWFyIG9uIHRvcC4KICAgICAgICAgICAqLwogICAgICAgICAgei1pbmRleDogNTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1oZWxwZXItdGV4dGFyZWEgewogICAgICAgICAgcGFkZGluZzogMDsKICAgICAgICAgIGJvcmRlcjogMDsKICAgICAgICAgIG1hcmdpbjogMDsKICAgICAgICAgIC8qIE1vdmUgdGV4dGFyZWEgb3V0IG9mIHRoZSBzY3JlZW4gdG8gdGhlIGZhciBsZWZ0LCBzbyB0aGF0IHRoZSBjdXJzb3IgaXMgbm90IHZpc2libGUgKi8KICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIG9wYWNpdHk6IDA7CiAgICAgICAgICBsZWZ0OiAtOTk5OWVtOwogICAgICAgICAgdG9wOiAwOwogICAgICAgICAgd2lkdGg6IDA7CiAgICAgICAgICBoZWlnaHQ6IDA7CiAgICAgICAgICB6LWluZGV4OiAtNTsKICAgICAgICAgIC8qKiBQcmV2ZW50IHdyYXBwaW5nIHNvIHRoZSBJTUUgYXBwZWFycyBhZ2FpbnN0IHRoZSB0ZXh0YXJlYSBhdCB0aGUgY29ycmVjdCBwb3NpdGlvbiAqLwogICAgICAgICAgd2hpdGUtc3BhY2U6IG5vd3JhcDsKICAgICAgICAgIG92ZXJmbG93OiBoaWRkZW47CiAgICAgICAgICByZXNpemU6IG5vbmU7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybSAuY29tcG9zaXRpb24tdmlldyB7CiAgICAgICAgICAvKiBUT0RPOiBDb21wb3NpdGlvbiBwb3NpdGlvbiBnb3QgbWVzc2VkIHVwIHNvbWV3aGVyZSAqLwogICAgICAgICAgYmFja2dyb3VuZDogIzAwMDsKICAgICAgICAgIGNvbG9yOiAjRkZGOwogICAgICAgICAgZGlzcGxheTogbm9uZTsKICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7CiAgICAgICAgICB6LWluZGV4OiAxOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLmNvbXBvc2l0aW9uLXZpZXcuYWN0aXZlIHsKICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLnh0ZXJtLXZpZXdwb3J0IHsKICAgICAgICAgIC8qIE9uIE9TIFggdGhpcyBpcyByZXF1aXJlZCBpbiBvcmRlciBmb3IgdGhlIHNjcm9sbCBiYXIgdG8gYXBwZWFyIGZ1bGx5IG9wYXF1ZSAqLwogICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogIzAwMDsKICAgICAgICAgIG92ZXJmbG93LXk6IHNjcm9sbDsKICAgICAgICAgIGN1cnNvcjogZGVmYXVsdDsKICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIHJpZ2h0OiAwOwogICAgICAgICAgbGVmdDogMDsKICAgICAgICAgIHRvcDogMDsKICAgICAgICAgIGJvdHRvbTogMDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1zY3JlZW4gewogICAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLnh0ZXJtLXNjcmVlbiBjYW52YXMgewogICAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgICAgbGVmdDogMDsKICAgICAgICAgIHRvcDogMDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1zY3JvbGwtYXJlYSB7CiAgICAgICAgICB2aXNpYmlsaXR5OiBoaWRkZW47CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybS1jaGFyLW1lYXN1cmUtZWxlbWVudCB7CiAgICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7CiAgICAgICAgICB2aXNpYmlsaXR5OiBoaWRkZW47CiAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7CiAgICAgICAgICB0b3A6IDA7CiAgICAgICAgICBsZWZ0OiAtOTk5OWVtOwogICAgICAgICAgbGluZS1oZWlnaHQ6IG5vcm1hbDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLmVuYWJsZS1tb3VzZS1ldmVudHMgewogICAgICAgICAgLyogV2hlbiBtb3VzZSBldmVudHMgYXJlIGVuYWJsZWQgKGVnLiB0bXV4KSwgcmV2ZXJ0IHRvIHRoZSBzdGFuZGFyZCBwb2ludGVyIGN1cnNvciAqLwogICAgICAgICAgY3Vyc29yOiBkZWZhdWx0OwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0ueHRlcm0tY3Vyc29yLXBvaW50ZXIsCiAgICAgIC54dGVybSAueHRlcm0tY3Vyc29yLXBvaW50ZXIgewogICAgICAgICAgY3Vyc29yOiBwb2ludGVyOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0uY29sdW1uLXNlbGVjdC5mb2N1cyB7CiAgICAgICAgICAvKiBDb2x1bW4gc2VsZWN0aW9uIG1vZGUgKi8KICAgICAgICAgIGN1cnNvcjogY3Jvc3NoYWlyOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLnh0ZXJtLWFjY2Vzc2liaWxpdHk6bm90KC5kZWJ1ZyksCiAgICAgIC54dGVybSAueHRlcm0tbWVzc2FnZSB7CiAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7CiAgICAgICAgICBsZWZ0OiAwOwogICAgICAgICAgdG9wOiAwOwogICAgICAgICAgYm90dG9tOiAwOwogICAgICAgICAgcmlnaHQ6IDA7CiAgICAgICAgICB6LWluZGV4OiAxMDsKICAgICAgICAgIGNvbG9yOiB0cmFuc3BhcmVudDsKICAgICAgICAgIHBvaW50ZXItZXZlbnRzOiBub25lOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLnh0ZXJtLWFjY2Vzc2liaWxpdHktdHJlZTpub3QoLmRlYnVnKSAqOjpzZWxlY3Rpb24gewogICAgICAgIGNvbG9yOiB0cmFuc3BhcmVudDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1hY2Nlc3NpYmlsaXR5LXRyZWUgewogICAgICAgIHVzZXItc2VsZWN0OiB0ZXh0OwogICAgICAgIHdoaXRlLXNwYWNlOiBwcmU7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybSAubGl2ZS1yZWdpb24gewogICAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgICAgbGVmdDogLTk5OTlweDsKICAgICAgICAgIHdpZHRoOiAxcHg7CiAgICAgICAgICBoZWlnaHQ6IDFweDsKICAgICAgICAgIG92ZXJmbG93OiBoaWRkZW47CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybS1kaW0gewogICAgICAgICAgLyogRGltIHNob3VsZCBub3QgYXBwbHkgdG8gYmFja2dyb3VuZCwgc28gdGhlIG9wYWNpdHkgb2YgdGhlIGZvcmVncm91bmQgY29sb3IgaXMgYXBwbGllZAogICAgICAgICAgICogZXhwbGljaXRseSBpbiB0aGUgZ2VuZXJhdGVkIGNsYXNzIGFuZCByZXNldCB0byAxIGhlcmUgKi8KICAgICAgICAgIG9wYWNpdHk6IDEgIWltcG9ydGFudDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLXVuZGVybGluZS0xIHsgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7IH0KICAgICAgLnh0ZXJtLXVuZGVybGluZS0yIHsgdGV4dC1kZWNvcmF0aW9uOiBkb3VibGUgdW5kZXJsaW5lOyB9CiAgICAgIC54dGVybS11bmRlcmxpbmUtMyB7IHRleHQtZGVjb3JhdGlvbjogd2F2eSB1bmRlcmxpbmU7IH0KICAgICAgLnh0ZXJtLXVuZGVybGluZS00IHsgdGV4dC1kZWNvcmF0aW9uOiBkb3R0ZWQgdW5kZXJsaW5lOyB9CiAgICAgIC54dGVybS11bmRlcmxpbmUtNSB7IHRleHQtZGVjb3JhdGlvbjogZGFzaGVkIHVuZGVybGluZTsgfQogICAgICAKICAgICAgLnh0ZXJtLW92ZXJsaW5lIHsKICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogb3ZlcmxpbmU7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybS1vdmVybGluZS54dGVybS11bmRlcmxpbmUtMSB7IHRleHQtZGVjb3JhdGlvbjogb3ZlcmxpbmUgdW5kZXJsaW5lOyB9CiAgICAgIC54dGVybS1vdmVybGluZS54dGVybS11bmRlcmxpbmUtMiB7IHRleHQtZGVjb3JhdGlvbjogb3ZlcmxpbmUgZG91YmxlIHVuZGVybGluZTsgfQogICAgICAueHRlcm0tb3ZlcmxpbmUueHRlcm0tdW5kZXJsaW5lLTMgeyB0ZXh0LWRlY29yYXRpb246IG92ZXJsaW5lIHdhdnkgdW5kZXJsaW5lOyB9CiAgICAgIC54dGVybS1vdmVybGluZS54dGVybS11bmRlcmxpbmUtNCB7IHRleHQtZGVjb3JhdGlvbjogb3ZlcmxpbmUgZG90dGVkIHVuZGVybGluZTsgfQogICAgICAueHRlcm0tb3ZlcmxpbmUueHRlcm0tdW5kZXJsaW5lLTUgeyB0ZXh0LWRlY29yYXRpb246IG92ZXJsaW5lIGRhc2hlZCB1bmRlcmxpbmU7IH0KICAgICAgCiAgICAgIC54dGVybS1zdHJpa2V0aHJvdWdoIHsKICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogbGluZS10aHJvdWdoOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0tc2NyZWVuIC54dGVybS1kZWNvcmF0aW9uLWNvbnRhaW5lciAueHRlcm0tZGVjb3JhdGlvbiB7CiAgICAgIAl6LWluZGV4OiA2OwogICAgICAJcG9zaXRpb246IGFic29sdXRlOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0tc2NyZWVuIC54dGVybS1kZWNvcmF0aW9uLWNvbnRhaW5lciAueHRlcm0tZGVjb3JhdGlvbi54dGVybS1kZWNvcmF0aW9uLXRvcC1sYXllciB7CiAgICAgIAl6LWluZGV4OiA3OwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0tZGVjb3JhdGlvbi1vdmVydmlldy1ydWxlciB7CiAgICAgICAgICB6LWluZGV4OiA4OwogICAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgICAgdG9wOiAwOwogICAgICAgICAgcmlnaHQ6IDA7CiAgICAgICAgICBwb2ludGVyLWV2ZW50czogbm9uZTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLWRlY29yYXRpb24tdG9wIHsKICAgICAgICAgIHotaW5kZXg6IDI7CiAgICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7CiAgICAgIH0KICAgIDwvc3R5bGU+CiAgPC9oZWFkPgogIDxib2R5PgogICAgPGRpdiBpZD0idGVybWluYWwiPjwvZGl2PgogICAgPHNjcmlwdCB0eXBlPSJtb2R1bGUiPgogICAgICBpbXBvcnQgImh0dHBzOi8vdW5wa2cuY29tL0B4dGVybS94dGVybS9saWIveHRlcm0uanMiOwogICAgICAvLyBpbXBvcnQgJ2h0dHBzOi8vdW5wa2cuY29tL0B4dGVybS9hZGRvbi1maXQnOwogICAgICAKICAgICAgdmFyIHRlcm0gPSBuZXcgVGVybWluYWwoKTsKICAgICAgdGVybS5vcGVuKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0ZXJtaW5hbCcpKTsKICAgICAgLy8gdGVybS53cml0ZSgnRG93bmxvYWRpbmcgcmVwb3NpdG9yeS4uLicpCiAgICAgIHdpbmRvdy50ZXJtID0gdGVybTsKICAgICAgCiAgICAgIC8vIGNvbnN0IGZpdEFkZG9uID0gbmV3IEZpdEFkZG9uKCk7CiAgICAgIC8vIHRlcm0ubG9hZEFkZG9uKGZpdEFkZG9uKTsKICAgICAgLy8gZml0QWRkb24uZml0KCk7CiAgICAgIAogICAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigibWVzc2FnZSIsZT0+ewogICAgICAgIHRlcm0ud3JpdGUoZS5kYXRhKQogICAgICB9KTsKICAgIDwvc2NyaXB0PgogIDwvYm9keT4KPC9odG1sPgo="></iframe>

    <script type="module">
    import { WebContainer } from 'https://unpkg.com/@webcontainer/api';
    let webcontainerInstance;
    
    var repository = (window.location.pathname.slice(1) || "pooiod/NodeHome");
    
    if (!window.location.hash) {
        window.location.hash = "/";
    }
    
    var data;
        async function fetchAndProcessZip() {
            var apiUrl = "/api/get/index.php?rep="+repository;
            document.querySelector('iframe').contentWindow.postMessage("Downloading repository: "+repository, '*');
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
                        document.querySelector('iframe').contentWindow.postMessage("\r\n"+zipEntry.name, '*');
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
                    } document.querySelector('iframe').contentWindow.postMessage("\r\n", '*');

                    // Display the JSON in the textarea
                    data = fileData[Object.keys(fileData)[0]];
                    data = data[Object.keys(data)[0]];
                    
                    data = JSON.parse(
                    JSON.stringify(data)
                    .replace(/res\.send\([']/g, 'res.send(\'<script>window.parent.postMessage({url:window.location.pathname}, \'*\');<\/script>')
                    .replace(/res\.send\(["]/g, 'res.send("<script>window.parent.postMessage({url:window.location.pathname}, \'*\');<\/script>')
                    .replace(/res\.send\([`]/g, 'res.send(`<script>window.parent.postMessage({url:window.location.pathname}, \'*\');<\/script>')
                    ); // this is a hacky fix, but it works

                    // document.querySelector('iframe').contentWindow.postMessage(JSON.stringify(data, null, 2), '*');
                } else {
                    document.querySelector('iframe').contentWindow.postMessage("\r\n" + esponse.status, '*');
                    data = false;
                    console.warn(response.status);
                }
            } catch (error) {
                document.querySelector('iframe').contentWindow.postMessage("\r\n" + error.message, '*');
                console.error(error.message);
                data = false;
            }
        }
        
        var containerurl = false;

        window.addEventListener('load', async () => {
            await fetchAndProcessZip();
            var files = data;
            window.files = files;
            
            if (data) {
                document.querySelector('iframe').contentWindow.postMessage("\r\nMounting files...", '*');
            } else {
                return;
            }
            
            // Call only once
            webcontainerInstance = await WebContainer.boot();
            await webcontainerInstance.mount(files);
    
            const exitCode = await installDependencies();
            if (exitCode !== 0) {
                document.querySelector('iframe').contentWindow.postMessage("\r\nServer failed to install", '*');
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
            try {
                if ("url" in event.data) {
                    window.location.hash = event.data.url;
                }
            } catch(error) {
                error = error;
            }
        });
        
        async function installDependencies() {
            // Install dependencies
            document.querySelector('iframe').contentWindow.postMessage("\r\n\nInstalling packages...\r\n", '*');
            
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
            // Run `npm run start` to start the Express app
            await webcontainerInstance.spawn('npm', ['run', 'start']);
            
            document.querySelector('iframe').contentWindow.postMessage("\r\nFinishing up...", '*');
            
            window.webcontainerInstance = webcontainerInstance;
            
            // Wait for `server-ready` event
            webcontainerInstance.on('server-ready', (port, url) => {
            document.querySelector('iframe').contentWindow.postMessage("\r\nLoading preview...", '*');
                var page = window.location.hash.slice(1);
                if (url.endsWith('/')) {
                  url = url.slice(0, -1);
                } 
                containerurl = url;
                url += page;
                document.querySelector('iframe').src = url;
                console.log("page loaded");
            });
        }
        
        window.onhashchange = function() {
            if (containerurl) {
                var page = window.location.hash.slice(1);
                var url = containerurl;
                if (url.endsWith('/')) {
                  url = url.slice(0, -1);
                } url += page;
                document.querySelector('iframe').src = url;
            }
        };
    </script>
</body>
</html>
