<?php
/*
Template Name: Hotelenroute Planner
*/
get_header(); ?>

<ui-view></ui-view>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8ddgbyZS9roUdYe_5Jnht5lD9XZZXSY0&libraries=places"></script>

<!-- inject:js -->

<!-- VENDORS -->
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/epolys.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angular.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angular-resource.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angular-route.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angular-sanitize.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angular-translate.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angular-ui-router.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/angularjs-geolocation.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/ui-bootstrap-tpls.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/bootstrap-slider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/libs/slider.js"></script>


<!-- APPLICATION FILES -->
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/app.modules.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/app.config.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/app.constants.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/app.components.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/main/app.main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/app.resources.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/main/404/404.module.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/main/404/404.controller.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/main/route/route.module.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/main/route/route.controller.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/main/route/route.service.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/select-on-click/select-on-click.directive.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/route-maps/route-maps.module.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/route-maps/route-maps.controller.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/route-maps/route-maps.directive.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/route-select/route-select.module.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/route-select/route-select.controller.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/route-select/route-select.directive.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/places-autocomplete/places-autocomplete.module.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/places-autocomplete/places-autocomplete.directive.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/places-autocomplete/places-autocomplete.service.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/geo-location/geo-location.service.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/api-booking/get-hotels.factory.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/google-maps-directions/google-maps-directions.factory.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/google-maps-geocoding/google-maps-geocoding.factory.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/google-maps-places/google-maps-places.factory.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/google-snap-roads/google-snap-roads.factory.js"></script>

<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/wp-rest-api/api.js"></script> -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/wp-rest-api/get-homepage.factory.js"></script> -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/resources/wp-rest-api/get-posts.factory.js"></script> -->

<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/nav-main/nav-main.module.js"></script> -->

<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/http-interceptor/http-interceptor.factory.js"></script> -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/http-interceptor/http-interceptor.module.js"></script> -->

<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/show-more/show-more.module.js"></script> -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/show-more/show-more-directive.js"></script> -->

<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/state-class/state-class-directive.js"></script> -->

<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/content-loader/content-loader.directive.js"></script> -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/language-select/language-select.directive.js"></script> -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/app/build/app/components/nav-main/nav-main.directive.js"></script> -->
