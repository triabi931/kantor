<style>
body {
    margin: 0;            /* Reset default margin */
}
iframe {
    display: block;       /* iframes are inline by default */
    background: #000;
    border: none;         /* Reset default border */
    height: 100vh;        /* Viewport-relative units */
    width: 100vw;
}
</style>
<body>
<iframe src="assets/print/<?php echo $_GET['pdf_file']?>"></iframe>
</body>