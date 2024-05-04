<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <script src="../page_script.js"></script>
    <link rel="stylesheet" href="../page_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link id="import_link_font_icon" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700&amp;display=swap&amp;subset=vietnamese">
</head>

<body>
<script>
$(document).ready(function(){
  $(".list-button-show-car").click(function(){
    // Extract car name from class name
    var className = $(this).attr('class');
    var carNamE = className.split(' ')[0];
    localStorage.setItem("carName", carName);
    window.location.href = "detail.php?carName=" + carName;
    console.log("carNamE before AJAX request: " + carNamE);
    // Send car name to server
  });
});
</script>
    <div class="page-wrap">
        <div class="tab-left">
            <div class="tab-left-header">
                <!-- <a href="#">
                    <img class="logo-main" alt="VinFast-logo"
                        src="https://vinfastauto.com/themes/porto/img/new-home-page/VinFast-logo.svg">
                </a> -->
                <!-- <div class="name-car">
                    <svg width="128" height="24" viewBox="0 0 128 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_9060_7885)">
                            <path
                                d="M92.2244 2.86726L93.126 0H67.3517L64.1167 10.9912H76.8447H77.4811C81.1935 10.9912 81.6708 11.8407 80.2919 16.0885C79.0191 20.2832 77.9054 21.5044 74.4582 21.5044C71.9656 21.5044 71.0641 20.6018 71.3292 18.2124H62.1545C61.3059 23.4159 64.0106 23.9469 73.6627 23.9469C84.9058 23.9469 87.5044 22.6726 89.6258 16.1416C91.6411 9.76991 90.2092 8.28319 80.504 8.17699L73.8749 8.12389L75.4128 2.81416L92.2244 2.86726Z"
                                fill="#1F2125"></path>
                            <path
                                d="M28.585 0L12.675 19.0088L9.28086 3.55752C8.85659 1.48673 7.00042 0 4.93211 0H0L5.25031 24H13.7357L33.8353 0H28.585Z"
                                fill="#1F2125"></path>
                            <path
                                d="M49.7999 2.70796H64.278L65.0205 0H46.1936C38.5038 0 31.7685 5.25664 29.9123 12.7434L27.1016 24H35.5339L38.4507 14.1239H54.5729L55.3684 11.4159H39.2462L39.5644 10.4071C40.8903 5.84071 45.0269 2.76106 49.7999 2.70796Z"
                                fill="#1F2125"></path>
                            <path
                                d="M96.2042 22.6726H93.2344L96.7346 11.3097H102.038C103.258 11.3097 104.159 11.6283 104.69 12.2124C105.22 12.8496 105.432 13.7522 105.167 14.5487C104.955 15.6106 104.371 16.5664 103.47 17.2566C102.515 17.9469 101.295 18.3186 100.129 18.2655H97.2649L97.9013 16.0354H100.341C100.818 16.0354 101.295 15.9292 101.72 15.7168C102.038 15.5044 102.25 15.1858 102.356 14.7611C102.462 14.4425 102.409 14.1239 102.197 13.9115C101.879 13.6991 101.508 13.5929 101.136 13.646H99.0681L96.2042 22.6726Z"
                                fill="#1F2125"></path>
                            <path d="M103.945 22.6726L107.605 10.9381H110.468L106.809 22.6726H103.945Z" fill="#1F2125">
                            </path>
                            <path
                                d="M111.423 22.8319C110.468 22.8319 109.832 22.5133 109.514 21.9292C109.195 21.3451 109.195 20.4425 109.567 19.3274L110.999 14.6018H113.915L112.484 19.1681C112.324 19.4867 112.324 19.9115 112.43 20.2301C112.59 20.4956 112.855 20.6549 113.173 20.6018C113.597 20.6018 113.968 20.4425 114.234 20.177C114.552 19.8584 114.764 19.4867 114.87 19.0088L116.249 14.6018H119.166L116.673 22.6726H113.862L114.34 21.0796L114.499 21.3982C114.128 21.823 113.65 22.1947 113.173 22.4071C112.59 22.6726 112.006 22.8319 111.423 22.8319Z"
                                fill="#1F2125"></path>
                            <path
                                d="M121.763 22.8319C121.074 22.8319 120.437 22.7788 119.748 22.6195C119.164 22.4602 118.581 22.1947 118.051 21.8761L119.43 19.9115C119.801 20.2301 120.278 20.4425 120.755 20.6018C121.233 20.7611 121.763 20.8673 122.293 20.8673C122.559 20.8673 122.877 20.8142 123.142 20.708C123.301 20.6549 123.407 20.5487 123.46 20.3894C123.513 20.2301 123.407 20.0177 123.248 19.9646C123.036 19.8584 122.771 19.7522 122.506 19.6991C122.187 19.5929 121.869 19.5398 121.498 19.3805C121.18 19.2743 120.862 19.115 120.543 18.9558C120.278 18.7965 120.066 18.531 119.907 18.2124C119.801 17.8407 119.801 17.4159 119.907 17.0442C120.066 16.5133 120.331 16.0354 120.702 15.6637C121.127 15.2389 121.657 14.9204 122.187 14.7611C122.824 14.5487 123.513 14.4425 124.15 14.4425C124.733 14.4425 125.369 14.5487 125.9 14.708C126.377 14.8673 126.854 15.0796 127.279 15.3982L125.953 17.3097C125.263 16.7257 124.468 16.4602 123.566 16.4602C123.301 16.4602 122.983 16.5133 122.718 16.6195C122.559 16.6726 122.453 16.7788 122.4 16.9381C122.346 17.0973 122.453 17.3097 122.612 17.3628C122.824 17.5221 123.089 17.5752 123.354 17.6814C123.672 17.7876 123.991 17.8938 124.309 18C124.627 18.1062 124.945 18.2655 125.263 18.4248C125.528 18.5841 125.741 18.8496 125.9 19.115C126.059 19.4867 126.059 19.8584 125.953 20.2301C125.794 21.0265 125.263 21.7699 124.521 22.1947C123.725 22.5664 122.771 22.8319 121.763 22.8319Z"
                                fill="#1F2125"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_9060_7885">
                                <rect width="127.333" height="24" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div> -->
                <div class="show-car">
                <div class="button-show-car">
                    <div class="VF5 list-button-show-car">
                        <svg width="128" height="24" viewBox="0 0 128 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_9060_7885)">
                                <path
                                    d="M92.2244 2.86726L93.126 0H67.3517L64.1167 10.9912H76.8447H77.4811C81.1935 10.9912 81.6708 11.8407 80.2919 16.0885C79.0191 20.2832 77.9054 21.5044 74.4582 21.5044C71.9656 21.5044 71.0641 20.6018 71.3292 18.2124H62.1545C61.3059 23.4159 64.0106 23.9469 73.6627 23.9469C84.9058 23.9469 87.5044 22.6726 89.6258 16.1416C91.6411 9.76991 90.2092 8.28319 80.504 8.17699L73.8749 8.12389L75.4128 2.81416L92.2244 2.86726Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M28.585 0L12.675 19.0088L9.28086 3.55752C8.85659 1.48673 7.00042 0 4.93211 0H0L5.25031 24H13.7357L33.8353 0H28.585Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M49.7999 2.70796H64.278L65.0205 0H46.1936C38.5038 0 31.7685 5.25664 29.9123 12.7434L27.1016 24H35.5339L38.4507 14.1239H54.5729L55.3684 11.4159H39.2462L39.5644 10.4071C40.8903 5.84071 45.0269 2.76106 49.7999 2.70796Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M96.2042 22.6726H93.2344L96.7346 11.3097H102.038C103.258 11.3097 104.159 11.6283 104.69 12.2124C105.22 12.8496 105.432 13.7522 105.167 14.5487C104.955 15.6106 104.371 16.5664 103.47 17.2566C102.515 17.9469 101.295 18.3186 100.129 18.2655H97.2649L97.9013 16.0354H100.341C100.818 16.0354 101.295 15.9292 101.72 15.7168C102.038 15.5044 102.25 15.1858 102.356 14.7611C102.462 14.4425 102.409 14.1239 102.197 13.9115C101.879 13.6991 101.508 13.5929 101.136 13.646H99.0681L96.2042 22.6726Z"
                                    fill="#1F2125"></path>
                                <path d="M103.945 22.6726L107.605 10.9381H110.468L106.809 22.6726H103.945Z" fill="#1F2125">
                                </path>
                                <path
                                    d="M111.423 22.8319C110.468 22.8319 109.832 22.5133 109.514 21.9292C109.195 21.3451 109.195 20.4425 109.567 19.3274L110.999 14.6018H113.915L112.484 19.1681C112.324 19.4867 112.324 19.9115 112.43 20.2301C112.59 20.4956 112.855 20.6549 113.173 20.6018C113.597 20.6018 113.968 20.4425 114.234 20.177C114.552 19.8584 114.764 19.4867 114.87 19.0088L116.249 14.6018H119.166L116.673 22.6726H113.862L114.34 21.0796L114.499 21.3982C114.128 21.823 113.65 22.1947 113.173 22.4071C112.59 22.6726 112.006 22.8319 111.423 22.8319Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M121.763 22.8319C121.074 22.8319 120.437 22.7788 119.748 22.6195C119.164 22.4602 118.581 22.1947 118.051 21.8761L119.43 19.9115C119.801 20.2301 120.278 20.4425 120.755 20.6018C121.233 20.7611 121.763 20.8673 122.293 20.8673C122.559 20.8673 122.877 20.8142 123.142 20.708C123.301 20.6549 123.407 20.5487 123.46 20.3894C123.513 20.2301 123.407 20.0177 123.248 19.9646C123.036 19.8584 122.771 19.7522 122.506 19.6991C122.187 19.5929 121.869 19.5398 121.498 19.3805C121.18 19.2743 120.862 19.115 120.543 18.9558C120.278 18.7965 120.066 18.531 119.907 18.2124C119.801 17.8407 119.801 17.4159 119.907 17.0442C120.066 16.5133 120.331 16.0354 120.702 15.6637C121.127 15.2389 121.657 14.9204 122.187 14.7611C122.824 14.5487 123.513 14.4425 124.15 14.4425C124.733 14.4425 125.369 14.5487 125.9 14.708C126.377 14.8673 126.854 15.0796 127.279 15.3982L125.953 17.3097C125.263 16.7257 124.468 16.4602 123.566 16.4602C123.301 16.4602 122.983 16.5133 122.718 16.6195C122.559 16.6726 122.453 16.7788 122.4 16.9381C122.346 17.0973 122.453 17.3097 122.612 17.3628C122.824 17.5221 123.089 17.5752 123.354 17.6814C123.672 17.7876 123.991 17.8938 124.309 18C124.627 18.1062 124.945 18.2655 125.263 18.4248C125.528 18.5841 125.741 18.8496 125.9 19.115C126.059 19.4867 126.059 19.8584 125.953 20.2301C125.794 21.0265 125.263 21.7699 124.521 22.1947C123.725 22.5664 122.771 22.8319 121.763 22.8319Z"
                                    fill="#1F2125"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_9060_7885">
                                    <rect width="127.333" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="VF6 list-button-show-car">
                        <svg width="92" height="31" viewBox="0 0 92 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_8158_6100)">
                                <path
                                    d="M87.75 16.0925C85.6853 22.6405 83.1316 23.9168 72.1017 23.9168C59.795 23.9168 59.0343 23.0012 62.3759 12.2358C65.6088 1.99769 67.2931 0 79.6813 0H91.2002L90.3037 2.83006C89.7875 2.83006 79.1652 2.83006 78.7848 2.83006C75.1444 2.83006 74.0577 3.69017 72.5092 8.15723H76.9103C77.1276 8.15723 77.3721 8.15723 77.6166 8.15723C78.0241 8.15723 78.4317 8.15723 78.812 8.15723H78.8392C88.2933 8.26821 89.7332 9.73873 87.75 16.0925ZM75.8779 11.015C75.6606 11.015 75.4704 11.015 75.2803 10.9873H71.6127C69.0318 19.311 68.8145 21.5029 72.8896 21.5029C76.3126 21.5029 77.3721 20.2821 78.6218 16.1202C79.9802 11.8197 79.5183 11.015 75.8779 11.015Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M27.9821 0L12.4154 19.0058L9.10098 3.55145C8.63914 1.47052 6.87328 0 4.78141 0H0L5.16175 24H8.3403H13.5021L33.1439 0H27.9821Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M48.7658 2.74682H62.9471L63.6806 0.0277443H45.2341C37.7088 0.0277443 31.1344 5.27168 29.3142 12.7353L26.5703 24H34.8291L37.6817 14.1225H53.4658L54.1993 11.4035H38.4695L38.7683 10.4046C40.0452 5.85433 44.1203 2.74682 48.7658 2.74682Z"
                                    fill="#1F2125"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_8158_6100">
                                    <rect width="91.2" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="VFe34 list-button-show-car">
                        <svg width="123" height="31" viewBox="0 0 123 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7952_5899)">
                            </g>
                            <g clip-path="url(#clip1_7952_5899)">
                                <path
                                    d="M123.058 14.8168L122.214 17.9281H116.747L115.197 23.6372H107.755L109.316 17.9281H98.7578L99.498 15.2326L115.975 -0.418606H121.752L117.591 14.8168H123.058ZM112.431 6.53222L103.699 14.8168H110.166L112.431 6.53222Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M24.5244 -0.404659L10.8818 18.7038L7.96615 3.1447C7.57582 1.07145 6.00972 -0.404659 4.20085 -0.404659H0L4.52455 23.7209H7.30211H11.8243L29.049 -0.404659H24.5244Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M42.7157 2.33549H55.1421L55.7824 -0.404659L39.6168 -0.399079C33.0145 -0.396288 27.2618 4.87752 25.6695 12.3892L23.2656 23.7209H30.4892L32.9907 13.7788H46.8094L47.4616 11.0387H33.6785L33.9332 10.0258C35.0875 5.46629 38.66 2.33549 42.7157 2.33549Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M98.9336 5.44955C100.305 0.544073 98.8598 -0.418606 90.0107 -0.418606C81.1615 -0.418606 79.1622 0.672431 77.608 6.31736H85.0506C85.9383 3.07773 86.6048 2.43595 89.1229 2.43595C92.3075 2.43595 92.7882 3.01356 91.9362 5.96298C91.3816 8.11157 90.7152 8.52734 87.8258 8.52734H84.8649L84.0747 11.3484H86.2954C89.8869 11.3484 90.8128 12.0795 90.0726 14.7722C89.1848 17.9783 88.6635 21.2012 84.6198 21.2012C81.7565 21.2012 81.2662 20.512 82.1207 17.0994H74.84H74.3735C71.4936 19.6888 68.3852 20.4841 65.1816 20.2609C61.79 20.0265 61.1117 16.9013 61.1117 16.9013C71.515 15.1349 73.7523 12.4646 74.5425 11.6358C75.3898 10.7457 76.6536 8.12273 74.9828 6.76661C73.3263 5.42444 71.4722 5.51373 68.6756 5.82346C66.3621 6.08018 61.0379 8.18133 57.9723 11.5967C56.6942 13.0198 56.0611 14.5239 55.7541 15.7963L50.3608 16.4241L49.6016 17.557L55.5161 17.2473C55.5066 17.3505 55.4994 17.4482 55.4947 17.543C55.4471 18.4332 55.5708 19.3373 55.9136 20.1325C57.463 23.7321 62.2374 23.9804 66.8405 23.2605C70.6011 22.6718 73.0359 20.9138 74.076 20.0097C74.3092 22.9396 76.9845 23.6261 83.9058 23.6261C93.3833 23.6261 95.5325 22.535 97.0486 16.9543C98.1244 12.9724 97.765 11.6274 94.5281 10.4639C97.2866 9.54861 98.1363 8.40456 98.9336 5.44955ZM64.6032 9.54024C67.1166 7.41956 68.9921 7.88834 69.4015 8.33201C69.9037 8.87613 70.1869 10.4025 67.6164 12.0153C65.1983 13.5333 64.5247 13.6365 61.5615 14.4011C61.5615 14.4011 62.0851 11.6665 64.6032 9.54024Z"
                                    fill="#1F2125"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_7952_5899">
                                    <rect width="123" height="31" fill="white"></rect>
                                </clipPath>
                                <clipPath id="clip1_7952_5899">
                                    <rect width="123" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="VF7 list-button-show-car">
                        <svg width="92" height="24" viewBox="0 0 92 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_8834_7504)">
                                <path
                                    d="M28.578 0L12.6798 19.0058L9.2948 3.5237C8.82312 1.47052 7.01965 0 4.88324 0H0L5.27168 24H8.51792H13.7896L33.8497 0H28.578Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M49.8049 2.71908H64.2882L65.0373 0H46.198C38.5124 0 31.798 5.24393 29.939 12.7075L27.1367 24H35.5714L38.4847 14.1225H54.6049L55.3541 11.4035H39.2893L39.5945 10.4046C40.8986 5.82659 45.0604 2.71908 49.8049 2.71908Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M91.2019 0.0832367H83.0169H66.1476L65.3984 2.88555H80.9915L65.8424 23.9723H71.7245C73.1672 23.9723 74.5268 23.2786 75.3869 22.0855L89.1765 2.8578L91.2019 0.0832367Z"
                                    fill="#1F2125"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_8834_7504">
                                    <rect width="91.2" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="VF8 list-button-show-car">
                        <svg width="92" height="31" viewBox="0 0 92 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7952_5908)">
                            </g>
                            <g clip-path="url(#clip1_7952_5908)">
                                <path
                                    d="M29.2082 -0.138729L12.957 18.8587L9.47464 3.39068C9.03542 1.33442 7.15304 -0.138729 4.9883 -0.138729H0L5.39615 23.8306H8.69031H14.0865L34.6044 -0.138729H29.2082Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M50.8878 2.59273H65.6958L66.4487 -0.138729H47.1857C39.3111 -0.138729 32.4718 5.10935 30.5581 12.5672L27.7031 23.8306H36.2993L39.2797 13.9482H55.7506L56.5349 11.2168H40.1268L40.4405 10.204C41.7896 5.69247 46.0563 2.59273 50.8878 2.59273Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M90.7298 5.75386C91.8906 1.42649 91.6082 -0.138729 80.8787 -0.138729C71.2158 -0.138729 68.8315 -0.108038 67.2314 5.66178C66.353 8.63877 66.3216 10.2347 68.7373 10.9712C65.1922 11.6157 64.1569 12.8434 62.902 17.447C61.3961 22.8792 61.1137 23.892 73.5374 23.892C84.2983 23.892 86.4944 23.6771 88.4082 17.4776C89.569 13.5799 89.9141 11.7999 86.2121 11.0326C88.6906 10.3881 89.7572 9.52879 90.7298 5.75386ZM80.6905 14.3472L79.4042 19.0429C79.0277 20.4546 77.6786 21.4367 76.11 21.4367H72.2511C71.2472 21.4367 70.5256 20.5467 70.7766 19.6567L72.157 14.9303C72.5649 13.5493 73.9139 12.5978 75.4512 12.5978H79.2159C80.2199 12.5978 80.9414 13.4572 80.6905 14.3472ZM83.2944 4.46485L82.5415 7.16562C82.165 8.54669 80.7846 9.52879 79.2473 9.52879H75.5139C74.51 9.52879 73.757 8.63877 74.0394 7.74874L74.8237 5.04797C75.2316 3.6669 76.5806 2.71549 78.1179 2.71549H81.8199C82.8238 2.71549 83.5454 3.57483 83.2944 4.46485Z"
                                    fill="#1F2125"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_7952_5908">
                                    <rect width="91.2" height="31" fill="white"></rect>
                                </clipPath>
                                <clipPath id="clip1_7952_5908">
                                    <rect width="91.2" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="VF9 list-button-show-car">
                        <svg width="92" height="31" viewBox="0 0 92 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7952_5911)">
                            </g>
                            <g clip-path="url(#clip1_7952_5911)">
                                <path
                                    d="M29.0733 0L12.8995 19.0058L9.45589 3.5237C8.97604 1.47052 7.14132 0 4.96787 0H0L5.36304 24H8.66555H14.0286L34.4364 0H29.0733Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M50.6666 2.71908H65.4008L66.1629 0H46.9971C39.1784 0 32.3475 5.24393 30.4564 12.7075L27.6055 24H36.1863L39.1501 14.1225H55.5498L56.3119 11.4035H39.9687L40.2792 10.4046C41.6058 5.82659 45.8398 2.71908 50.6666 2.71908Z"
                                    fill="#1F2125"></path>
                                <path
                                    d="M65.1759 7.79653C67.1518 1.2763 69.6075 0 80.2207 0C92.0476 0 92.7815 0.915607 89.5636 11.6532C86.4869 21.8913 84.8498 23.889 72.9382 23.889H60.8008L61.6476 21.059C62.1557 21.059 73.4181 21.059 73.8132 21.059C77.3133 21.059 78.3577 20.1988 79.8537 15.7318H75.6197C75.3939 15.7318 75.1681 15.7318 74.9423 15.7318C74.5471 15.7318 74.1519 15.7318 73.785 15.7318H73.7568C64.6396 15.6208 63.2565 14.178 65.1759 7.79653ZM76.3536 12.9017C76.5512 12.9017 80.7005 12.9295 80.7005 12.9295C83.4385 4.24509 84.5675 2.94104 79.3456 2.94104C76.0431 2.94104 74.8294 3.57919 73.5874 7.74104C72.289 11.9861 72.8535 12.7908 76.3536 12.9017Z"
                                    fill="#1F2125"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_7952_5911">
                                    <rect width="91.2" height="31" fill="white"></rect>
                                </clipPath>
                                <clipPath id="clip1_7952_5911">
                                    <rect width="91.2" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
    
                </div>
            </div>
            </div>
            <div class="in-out">
                <div class="out">
                    <a id="out" class="button-out active" href="#">NGOẠI THẤT</a>
                </div>
                <div class="in">
                    <a id="in" class="button-in" href="#">NỘI THẤT</a>
                </div>

            </div>
            <div id="wrap-out">
            <?php
            // Check if carNamE is set in POST
                // $carName = $_SESSION['carName'];
                $carName = $_GET['carName'];
                // Prepare and bind
                $conn = mysqli_connect("localhost","root","","vinfast");
                $stmt = $conn->prepare("SELECT * FROM oto WHERE Ten = ?");
                $stmt->bind_param("s", $carName);

                // Execute the statement
                $stmt->execute();

                // Get the result
                $result = $stmt->get_result();

                // Fetch the data
                if ($result->num_rows > 0) {
                    // Fetch the row
                    $row = $result->fetch_assoc();
                } else {
                    echo "0 results";
                }
            ?>
                <div class="item-color active">
                    <img style="width: 70%;"
                        src="<?php echo $row['Anh1']; ?>"
                        alt="VF 5">
                </div>
                <div class="item-color">
                    <img style="width: 70%;"
                        src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwb79912db/images/VF5/GA12V/CE18.png"
                        alt="VF 5">
                </div>
                <div class="item-color">
                    <img style="width: 70%;"
                        src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw31159cd7/images/VF5/GA12V/CE1M.png"
                        alt="VF 5">
                </div>
                <div class="item-color">
                    <img style="width: 70%;"
                        src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw7f1def14/images/VF5/GA12V/CE1N.webp"
                        alt="VF 5">
                </div>
                <div class="info">
                    <div class="info-detail">
                        <p>Công suất tối đa</p>
                        <p>134 hp/100 kW</p>
                    </div>
                    <div class="info-detail">
                        <p>Quãng đường di chuyển 1 lần sạc đầy lên tới</p>
                        <p>326,4 km (NEDC)</p>
                    </div>
                    <div class="info-detail">
                        <p>Chiều dài cơ sở</p>
                        <p>2.514 mm</p>
                    </div>
                </div>
            </div>
            <div id="wrap-in">
                <div class="img-in">
                    <img style="width: 80%;"
                        src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/vi_VN/v1714784412281/images/VF5/GA12V/interior/CI11/1.jpg"
                        alt="NỘI THẤT">
                </div>
            </div>

        </div>
        <div class="tab-right">
            <div class="tab-right-name">
                <p>Ngoại thất</p>
            </div>
            <div class="wrap-button-color">
                <div class="button-color button-color-1 active" >
                    <a href="#">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/vi_VN/dwd33a1938/raisinghands/color/exterior/CE14.jpg"
                            alt="Ô tô điện VinFast VF5 màu Neptune Grey">
                    </a>
                </div>
                <div class="button-color  button-color-2">
                    <a href="#">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/vi_VN/dw94503081/raisinghands/color/exterior/CE18.jpg"
                            alt="Ô tô điện VinFast VF5 màu Brahminy White">
                    </a>
                </div>
                <div class="button-color button-color-3" >
                    <a href="#">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwbd06aff1/raisinghands/color/exterior/CE1M.jpg"
                            alt="Ô tô điện VinFast VF5 màu Crimson Red">
                    </a>
                </div>
                <div class="button-color button-color-4">
                    <a href="#">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw086fd02d/raisinghands/color/exterior/CE1N.jpg"
                            alt="Ô tô điện VinFast VF5 màu VinFast Blue">
                    </a>
                </div>

            </div>
            <div class="tab-right-name">
                <p>Nội thất</p>
            </div>
            <div>
                <a href="#"><img
                        src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/vi_VN/dwd33a1938/raisinghands/color/exterior/CE14.jpg"
                        alt=""></a>
            </div>
            <div class="tab-right-name">
                <p>Thông tin chủ xe</p>
            </div>
            <div class="info-own">
                <label for="name">Họ và tên:</label>
                <br>
                <input type="text" id="name" name="name">
            </div>
            <div class="info-own">
                <label for="name">Số điện thoại:</label>
                <br>
                <input type="text" id="name" name="name">
            </div>
            <div class="info-own">
                <label for="name">Số CMND:</label>
                <br>
                <input type="text" id="name" name="name">
            </div>
            <div class="info-own">
                <label for="name">Email:</label>
                <br>
                <input type="text" id="name" name="name">
            </div>
            <div class="tab-right-name">
                <p>Showroom nhận xe</p>
            </div>
            <div class="info-showroom">
                <label for="showroom">Choose a showroom:</label>
                <select id="showroom" name="showroom">
                    <option value="showroom1">Showroom 1</option>
                    <option value="showroom2">Showroom 2</option>
                    <option value="showroom3">Showroom 3</option>
                </select>
            </div>
            <div class="tab-right-name">
                <p>Hình thức thanh toán</p>
            </div>
            <div class="info-payment">
                <label for="payment">Choose 1 payment method:</label>
                <select id="payment" name="payment">
                    <option value="Visa">Thẻ thanh toán quốc tế</option>
                    <option value="ATM">Thẻ ATM nội địa</option>
                </select>
            </div>
            <div class="money">
                <div class="tab-right-name">
                    <p>Giá xe</p>
                </div>
                <div class="tab-right-name">
                    <p>548.000.000 VNĐ</p>
                </div>
            </div>
            <div class="checkout">
                <a id="checkout" class="button-checkout" href="#">THANH TOÁN</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>