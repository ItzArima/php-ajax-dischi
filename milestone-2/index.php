<?php 
    require __DIR__ . '/components/head.php';
?>
<body>
    <?php 
        require __DIR__ . '/components/header.php'; 
        require __DIR__ . '/components/main.php';
    ?>   
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./scripts/main.js"></script>
</body>
</html>