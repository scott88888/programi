<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #iframe-window {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            height: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        #window-iframe {
            border: none;
            width: 100%;
            height: 100%;
        }
        .resize-handle {
            position: absolute;
            background-color: transparent;
            transition: background-color 0.3s;
        }
        .resize-handle:hover {
            background-color: rgba(76, 175, 80, 0.3);
        }
        .resize-handle.right {
            top: 0;
            right: 0;
            bottom: 0;
            width: 5px;
            cursor: ew-resize;
        }
        .resize-handle.bottom {
            bottom: 0;
            left: 0;
            right: 0;
            height: 5px;
            cursor: ns-resize;
        }
        .resize-handle.corner {
            bottom: 0;
            right: 0;
            width: 10px;
            height: 10px;
            cursor: nwse-resize;
        }
    </style>
</head>
<body>
    <div id="iframe-window">
        <iframe id="window-iframe" src="http://18.163.86.151/index/index?code=b0Fx85bCMge6KMAsudqDSsFEQZ6aA8SAy8GMGXsMIsrncSf%2BwuuXQisiBplY%2FPrbT2d0e4dvP4hpssUdLEN36rbcW0vWxrchw%2BplqLjC92JJ0pl%2FOkCI4SQGwpn9tuPuSg"></iframe>
        <div class="resize-handle right"></div>
        <div class="resize-handle bottom"></div>
        <div class="resize-handle corner"></div>
    </div>

    <script>
        const iframeWindow = document.getElementById('iframe-window');
        const resizeHandles = document.querySelectorAll('.resize-handle');

        let isResizing = false;
        let currentHandle = null;
        let startX, startY, startWidth, startHeight;

        // 調整大小
        resizeHandles.forEach(handle => {
            handle.addEventListener('mousedown', initResize);
        });

        function initResize(e) {
            isResizing = true;
            currentHandle = e.target;
            startX = e.clientX;
            startY = e.clientY;
            startWidth = iframeWindow.offsetWidth;
            startHeight = iframeWindow.offsetHeight;

            document.addEventListener('mousemove', resize);
            document.addEventListener('mouseup', stopResize);
        }

        function resize(e) {
            if (!isResizing) return;

            const dx = e.clientX - startX;
            const dy = e.clientY - startY;

            if (currentHandle.classList.contains('right') || currentHandle.classList.contains('corner')) {
                iframeWindow.style.width = `${startWidth + dx}px`;
            }
            if (currentHandle.classList.contains('bottom') || currentHandle.classList.contains('corner')) {
                iframeWindow.style.height = `${startHeight + dy}px`;
            }
        }

        function stopResize() {
            isResizing = false;
            document.removeEventListener('mousemove', resize);
            document.removeEventListener('mouseup', stopResize);
        }

        // 拖動窗口
        iframeWindow.addEventListener('mousedown', initDrag);

        function initDrag(e) {
            if (e.target !== iframeWindow) return;
            startX = e.clientX - iframeWindow.offsetLeft;
            startY = e.clientY - iframeWindow.offsetTop;

            document.addEventListener('mousemove', drag);
            document.addEventListener('mouseup', stopDrag);
        }

        function drag(e) {
            iframeWindow.style.left = `${e.clientX - startX}px`;
            iframeWindow.style.top = `${e.clientY - startY}px`;
        }

        function stopDrag() {
            document.removeEventListener('mousemove', drag);
            document.removeEventListener('mouseup', stopDrag);
        }
    </script>
</body>
</html>