<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?> <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="theme-color" content="#fff">
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
    <iframe id="output" src="data:text/html;base64,PCFkb2N0eXBlIGh0bWw+CjxodG1sPgogIDxoZWFkPgogICAgPHN0eWxlPgogICAgICBib2R5ewogICAgICAgIG1hcmdpbjogMHB4OwogICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMyMjI7CiAgICAgICAgaGVpZ2h0OiAxMDB2aCAhaW1wb3J0YW50OwogICAgICAgIHdpZHRoOiAxMDB2dyAhaW1wb3J0YW50OwogICAgICAgIG92ZXJmbG93OiBoaWRkZW47CiAgICAgIH0KICAgICAgI3Rlcm1pbmFsIHsKICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMTExOwogICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICBoZWlnaHQ6IDEwMCUgIWltcG9ydGFudDsKICAgICAgICB3aWR0aDogMTAwJSAhaW1wb3J0YW50OwogICAgICAgIG92ZXJmbG93OiBoaWRkZW47CiAgICAgIH0KICAgICAgLnh0ZXJtIHsKICAgICAgICAgIGN1cnNvcjogdGV4dDsKICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTsKICAgICAgICAgIHVzZXItc2VsZWN0OiBub25lOwogICAgICAgICAgLW1zLXVzZXItc2VsZWN0OiBub25lOwogICAgICAgICAgLXdlYmtpdC11c2VyLXNlbGVjdDogbm9uZTsKICAgICAgICAgIGhlaWdodDogMTAwJSAhaW1wb3J0YW50OwogICAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLmZvY3VzLAogICAgICAueHRlcm06Zm9jdXMgewogICAgICAgICAgb3V0bGluZTogbm9uZTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1oZWxwZXJzIHsKICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIHRvcDogMDsKICAgICAgICAgIC8qKgogICAgICAgICAgICogVGhlIHotaW5kZXggb2YgdGhlIGhlbHBlcnMgbXVzdCBiZSBoaWdoZXIgdGhhbiB0aGUgY2FudmFzZXMgaW4gb3JkZXIgZm9yCiAgICAgICAgICAgKiBJTUVzIHRvIGFwcGVhciBvbiB0b3AuCiAgICAgICAgICAgKi8KICAgICAgICAgIHotaW5kZXg6IDU7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybSAueHRlcm0taGVscGVyLXRleHRhcmVhIHsKICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgICBib3JkZXI6IDA7CiAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAvKiBNb3ZlIHRleHRhcmVhIG91dCBvZiB0aGUgc2NyZWVuIHRvIHRoZSBmYXIgbGVmdCwgc28gdGhhdCB0aGUgY3Vyc29yIGlzIG5vdCB2aXNpYmxlICovCiAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7CiAgICAgICAgICBvcGFjaXR5OiAwOwogICAgICAgICAgbGVmdDogLTk5OTllbTsKICAgICAgICAgIHRvcDogMDsKICAgICAgICAgIHdpZHRoOiAwOwogICAgICAgICAgaGVpZ2h0OiAwOwogICAgICAgICAgei1pbmRleDogLTU7CiAgICAgICAgICAvKiogUHJldmVudCB3cmFwcGluZyBzbyB0aGUgSU1FIGFwcGVhcnMgYWdhaW5zdCB0aGUgdGV4dGFyZWEgYXQgdGhlIGNvcnJlY3QgcG9zaXRpb24gKi8KICAgICAgICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7CiAgICAgICAgICBvdmVyZmxvdzogaGlkZGVuOwogICAgICAgICAgcmVzaXplOiBub25lOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLmNvbXBvc2l0aW9uLXZpZXcgewogICAgICAgICAgLyogVE9ETzogQ29tcG9zaXRpb24gcG9zaXRpb24gZ290IG1lc3NlZCB1cCBzb21ld2hlcmUgKi8KICAgICAgICAgIGJhY2tncm91bmQ6ICMwMDA7CiAgICAgICAgICBjb2xvcjogI0ZGRjsKICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7CiAgICAgICAgICB3aGl0ZS1zcGFjZTogbm93cmFwOwogICAgICAgICAgei1pbmRleDogMTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC5jb21wb3NpdGlvbi12aWV3LmFjdGl2ZSB7CiAgICAgICAgICBkaXNwbGF5OiBibG9jazsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS12aWV3cG9ydCB7CiAgICAgICAgICAvKiBPbiBPUyBYIHRoaXMgaXMgcmVxdWlyZWQgaW4gb3JkZXIgZm9yIHRoZSBzY3JvbGwgYmFyIHRvIGFwcGVhciBmdWxseSBvcGFxdWUgKi8KICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMwMDA7CiAgICAgICAgICBvdmVyZmxvdy15OiBzY3JvbGw7CiAgICAgICAgICBjdXJzb3I6IGRlZmF1bHQ7CiAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7CiAgICAgICAgICByaWdodDogMDsKICAgICAgICAgIGxlZnQ6IDA7CiAgICAgICAgICB0b3A6IDA7CiAgICAgICAgICBib3R0b206IDA7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybSAueHRlcm0tc2NyZWVuIHsKICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1zY3JlZW4gY2FudmFzIHsKICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIGxlZnQ6IDA7CiAgICAgICAgICB0b3A6IDA7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybSAueHRlcm0tc2Nyb2xsLWFyZWEgewogICAgICAgICAgdmlzaWJpbGl0eTogaGlkZGVuOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0tY2hhci1tZWFzdXJlLWVsZW1lbnQgewogICAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrOwogICAgICAgICAgdmlzaWJpbGl0eTogaGlkZGVuOwogICAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgICAgdG9wOiAwOwogICAgICAgICAgbGVmdDogLTk5OTllbTsKICAgICAgICAgIGxpbmUtaGVpZ2h0OiBub3JtYWw7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybS5lbmFibGUtbW91c2UtZXZlbnRzIHsKICAgICAgICAgIC8qIFdoZW4gbW91c2UgZXZlbnRzIGFyZSBlbmFibGVkIChlZy4gdG11eCksIHJldmVydCB0byB0aGUgc3RhbmRhcmQgcG9pbnRlciBjdXJzb3IgKi8KICAgICAgICAgIGN1cnNvcjogZGVmYXVsdDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLnh0ZXJtLWN1cnNvci1wb2ludGVyLAogICAgICAueHRlcm0gLnh0ZXJtLWN1cnNvci1wb2ludGVyIHsKICAgICAgICAgIGN1cnNvcjogcG9pbnRlcjsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLmNvbHVtbi1zZWxlY3QuZm9jdXMgewogICAgICAgICAgLyogQ29sdW1uIHNlbGVjdGlvbiBtb2RlICovCiAgICAgICAgICBjdXJzb3I6IGNyb3NzaGFpcjsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1hY2Nlc3NpYmlsaXR5Om5vdCguZGVidWcpLAogICAgICAueHRlcm0gLnh0ZXJtLW1lc3NhZ2UgewogICAgICAgICAgcG9zaXRpb246IGFic29sdXRlOwogICAgICAgICAgbGVmdDogMDsKICAgICAgICAgIHRvcDogMDsKICAgICAgICAgIGJvdHRvbTogMDsKICAgICAgICAgIHJpZ2h0OiAwOwogICAgICAgICAgei1pbmRleDogMTA7CiAgICAgICAgICBjb2xvcjogdHJhbnNwYXJlbnQ7CiAgICAgICAgICBwb2ludGVyLWV2ZW50czogbm9uZTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtIC54dGVybS1hY2Nlc3NpYmlsaXR5LXRyZWU6bm90KC5kZWJ1ZykgKjo6c2VsZWN0aW9uIHsKICAgICAgICBjb2xvcjogdHJhbnNwYXJlbnQ7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybSAueHRlcm0tYWNjZXNzaWJpbGl0eS10cmVlIHsKICAgICAgICB1c2VyLXNlbGVjdDogdGV4dDsKICAgICAgICB3aGl0ZS1zcGFjZTogcHJlOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0gLmxpdmUtcmVnaW9uIHsKICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIGxlZnQ6IC05OTk5cHg7CiAgICAgICAgICB3aWR0aDogMXB4OwogICAgICAgICAgaGVpZ2h0OiAxcHg7CiAgICAgICAgICBvdmVyZmxvdzogaGlkZGVuOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0tZGltIHsKICAgICAgICAgIC8qIERpbSBzaG91bGQgbm90IGFwcGx5IHRvIGJhY2tncm91bmQsIHNvIHRoZSBvcGFjaXR5IG9mIHRoZSBmb3JlZ3JvdW5kIGNvbG9yIGlzIGFwcGxpZWQKICAgICAgICAgICAqIGV4cGxpY2l0bHkgaW4gdGhlIGdlbmVyYXRlZCBjbGFzcyBhbmQgcmVzZXQgdG8gMSBoZXJlICovCiAgICAgICAgICBvcGFjaXR5OiAxICFpbXBvcnRhbnQ7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybS11bmRlcmxpbmUtMSB7IHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lOyB9CiAgICAgIC54dGVybS11bmRlcmxpbmUtMiB7IHRleHQtZGVjb3JhdGlvbjogZG91YmxlIHVuZGVybGluZTsgfQogICAgICAueHRlcm0tdW5kZXJsaW5lLTMgeyB0ZXh0LWRlY29yYXRpb246IHdhdnkgdW5kZXJsaW5lOyB9CiAgICAgIC54dGVybS11bmRlcmxpbmUtNCB7IHRleHQtZGVjb3JhdGlvbjogZG90dGVkIHVuZGVybGluZTsgfQogICAgICAueHRlcm0tdW5kZXJsaW5lLTUgeyB0ZXh0LWRlY29yYXRpb246IGRhc2hlZCB1bmRlcmxpbmU7IH0KICAgICAgCiAgICAgIC54dGVybS1vdmVybGluZSB7CiAgICAgICAgICB0ZXh0LWRlY29yYXRpb246IG92ZXJsaW5lOwogICAgICB9CiAgICAgIAogICAgICAueHRlcm0tb3ZlcmxpbmUueHRlcm0tdW5kZXJsaW5lLTEgeyB0ZXh0LWRlY29yYXRpb246IG92ZXJsaW5lIHVuZGVybGluZTsgfQogICAgICAueHRlcm0tb3ZlcmxpbmUueHRlcm0tdW5kZXJsaW5lLTIgeyB0ZXh0LWRlY29yYXRpb246IG92ZXJsaW5lIGRvdWJsZSB1bmRlcmxpbmU7IH0KICAgICAgLnh0ZXJtLW92ZXJsaW5lLnh0ZXJtLXVuZGVybGluZS0zIHsgdGV4dC1kZWNvcmF0aW9uOiBvdmVybGluZSB3YXZ5IHVuZGVybGluZTsgfQogICAgICAueHRlcm0tb3ZlcmxpbmUueHRlcm0tdW5kZXJsaW5lLTQgeyB0ZXh0LWRlY29yYXRpb246IG92ZXJsaW5lIGRvdHRlZCB1bmRlcmxpbmU7IH0KICAgICAgLnh0ZXJtLW92ZXJsaW5lLnh0ZXJtLXVuZGVybGluZS01IHsgdGV4dC1kZWNvcmF0aW9uOiBvdmVybGluZSBkYXNoZWQgdW5kZXJsaW5lOyB9CiAgICAgIAogICAgICAueHRlcm0tc3RyaWtldGhyb3VnaCB7CiAgICAgICAgICB0ZXh0LWRlY29yYXRpb246IGxpbmUtdGhyb3VnaDsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLXNjcmVlbiAueHRlcm0tZGVjb3JhdGlvbi1jb250YWluZXIgLnh0ZXJtLWRlY29yYXRpb24gewogICAgICAJei1pbmRleDogNjsKICAgICAgCXBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLXNjcmVlbiAueHRlcm0tZGVjb3JhdGlvbi1jb250YWluZXIgLnh0ZXJtLWRlY29yYXRpb24ueHRlcm0tZGVjb3JhdGlvbi10b3AtbGF5ZXIgewogICAgICAJei1pbmRleDogNzsKICAgICAgfQogICAgICAKICAgICAgLnh0ZXJtLWRlY29yYXRpb24tb3ZlcnZpZXctcnVsZXIgewogICAgICAgICAgei1pbmRleDogODsKICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICAgICAgICAgIHRvcDogMDsKICAgICAgICAgIHJpZ2h0OiAwOwogICAgICAgICAgcG9pbnRlci1ldmVudHM6IG5vbmU7CiAgICAgIH0KICAgICAgCiAgICAgIC54dGVybS1kZWNvcmF0aW9uLXRvcCB7CiAgICAgICAgICB6LWluZGV4OiAyOwogICAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvaGVhZD4KICA8Ym9keT4KICAgIDxkaXYgaWQ9InRlcm1pbmFsIj48L2Rpdj4KICAgIDxzY3JpcHQgdHlwZT0ibW9kdWxlIj4KICAgICAgaW1wb3J0ICJodHRwczovL3VucGtnLmNvbS9AeHRlcm0veHRlcm0vbGliL3h0ZXJtLmpzIjsKICAgICAgLy8gaW1wb3J0ICdodHRwczovL3VucGtnLmNvbS9AeHRlcm0vYWRkb24tZml0JzsKICAgICAgCiAgICAgIHZhciB0ZXJtID0gbmV3IFRlcm1pbmFsKCk7CiAgICAgIHRlcm0ub3Blbihkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGVybWluYWwnKSk7CiAgICAgIC8vIHRlcm0ud3JpdGUoJ0Rvd25sb2FkaW5nIHJlcG9zaXRvcnkuLi4nKQogICAgICB3aW5kb3cudGVybSA9IHRlcm07CiAgICAgIAogICAgICAvLyBjb25zdCBmaXRBZGRvbiA9IG5ldyBGaXRBZGRvbigpOwogICAgICAvLyB0ZXJtLmxvYWRBZGRvbihmaXRBZGRvbik7CiAgICAgIC8vIGZpdEFkZG9uLmZpdCgpOwogICAgICAKICAgICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoIm1lc3NhZ2UiLGU9PnsKICAgICAgICB0ZXJtLndyaXRlKGUuZGF0YSkKICAgICAgfSk7CiAgICA8L3NjcmlwdD4KICA8L2JvZHk+CjwvaHRtbD4K"></iframe>

    <script>
        function themecolor(color) {
            document.querySelector("meta[name='theme-color']").content = color;
        }
    </script>
    <script type="module">
    import { WebContainer } from 'https://unpkg.com/@webcontainer/api';
    let webcontainerInstance;
    
    var repository = (window.location.pathname.slice(1, -1) || "pooiod/NodeHome");
    
    if (!window.location.hash) {
        document.querySelector('iframe').contentWindow.postMessage("Fixing content...", '*');
        window.location.hash = "/";
        window.location.pathname = window.location.pathname.endsWith('/') ? window.location.pathname : window.location.pathname + '/';
    }
    
    themecolor("#000");
    
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
                    
                    var scr = `window.parent.postMessage({url:window.location.pathname}, '*');`
                    
                    data = JSON.parse(
                    JSON.stringify(data)
                    .replace(/res\.send\([']/g, 'res.send(\'<script>'+scr+'<\/script>')
                    .replace(/res\.send\(["]/g, 'res.send("<script>'+scr+'<\/script>')
                    .replace(/res\.send\([`]/g, 'res.send(`<script>'+scr+'<\/script>')
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
        
        document.querySelector('iframe').style.pointerEvents = 'none';

        window.addEventListener('load', async () => {
            await fetchAndProcessZip();
            var files = data;
            window.files = files;
            
            if (data) {
                document.querySelector('iframe').contentWindow.postMessage("\r\nMounting files...", '*');
                const mountcheck = setTimeout(() => {
                    document.querySelector('iframe').contentWindow.postMessage("\r\nUnable to mount files", '*');
                }, 10000);
            } else {
                return;
            }
            
            // Call only once
            webcontainerInstance = await WebContainer.boot();
            await webcontainerInstance.mount(files);
            
            clearTimeout(mountcheck);
    
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
            document.querySelector('iframe').style.pointerEvents = 'auto';
                var page = window.location.hash.slice(1);
                if (url.endsWith('/')) {
                  url = url.slice(0, -1);
                } 
                containerurl = url;
                url += page;
                document.querySelector('iframe').src = url;
                themecolor("#fff");
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
