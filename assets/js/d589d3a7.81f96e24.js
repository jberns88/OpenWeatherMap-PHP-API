(window.webpackJsonp=window.webpackJsonp||[]).push([[11],{82:function(e,t,r){"use strict";r.r(t),r.d(t,"frontMatter",(function(){return i})),r.d(t,"metadata",(function(){return p})),r.d(t,"toc",(function(){return l})),r.d(t,"default",(function(){return s}));var n=r(3),a=r(7),o=(r(0),r(88)),i={title:"Getting Started"},p={unversionedId:"getting-started",id:"getting-started",isDocsHomePage:!1,title:"Getting Started",description:"OpenWeatherMap PHP API is a PHP client for weather APIs from OpenWeatherMap.org.",source:"@site/docs/getting-started.md",slug:"/getting-started",permalink:"/OpenWeatherMap-PHP-API/docs/getting-started",editUrl:"https://github.com/cmfcmf/OpenWeatherMap-PHP-API/edit/master/docs/docs/getting-started.md",version:"current",lastUpdatedBy:"Fran\xe7ois Lajoie",lastUpdatedAt:1584044546,formattedLastUpdatedAt:"3/12/2020",sidebar:"someSidebar",next:{title:"API Key",permalink:"/OpenWeatherMap-PHP-API/docs/api-key"}},l=[{value:"PHP Requirements",id:"php-requirements",children:[]},{value:"Installation",id:"installation",children:[{value:"Required PSR-17/-18 dependencies",id:"required-psr-17-18-dependencies",children:[]}]}],c={toc:l};function s(e){var t=e.components,r=Object(a.a)(e,["components"]);return Object(o.b)("wrapper",Object(n.a)({},c,r,{components:t,mdxType:"MDXLayout"}),Object(o.b)("p",null,Object(o.b)("em",{parentName:"p"},"OpenWeatherMap PHP API")," is a PHP client for weather APIs from ",Object(o.b)("a",{parentName:"p",href:"http://www.OpenWeatherMap.org"},"OpenWeatherMap.org"),"."),Object(o.b)("p",null,"This project aims to normalise the provided data and remove inconsistencies.\nIt is ",Object(o.b)("strong",{parentName:"p"},"not")," maintained by OpenWeatherMap and ",Object(o.b)("strong",{parentName:"p"},"not")," an official API wrapper."),Object(o.b)("p",null,"Please note that only the following APIs are supported:"),Object(o.b)("ul",null,Object(o.b)("li",{parentName:"ul"},Object(o.b)("a",{parentName:"li",href:"/OpenWeatherMap-PHP-API/docs/apis/current-weather"},"Current Weather Data")),Object(o.b)("li",{parentName:"ul"},Object(o.b)("a",{parentName:"li",href:"/OpenWeatherMap-PHP-API/docs/apis/weather-forecast"},"16-day/daily and 5-day/3-hourly Forecasts")),Object(o.b)("li",{parentName:"ul"},Object(o.b)("a",{parentName:"li",href:"/OpenWeatherMap-PHP-API/docs/apis/air-pollution"},"Air Pollution (CO, O3, SO2, NO2)")),Object(o.b)("li",{parentName:"ul"},Object(o.b)("a",{parentName:"li",href:"/OpenWeatherMap-PHP-API/docs/apis/uv-index"},"Ultraviolet Index"))),Object(o.b)("blockquote",null,Object(o.b)("p",{parentName:"blockquote"},"I am open for pull requests to add support for other APIs from OpenWeatherMap\nas long as they do not require a paid subscription. That is because I have no\nmeans to test paid APIs without paying myself.")),Object(o.b)("h2",{id:"php-requirements"},"PHP Requirements"),Object(o.b)("ul",null,Object(o.b)("li",{parentName:"ul"},Object(o.b)("strong",{parentName:"li"},"PHP 7.x")," (if you are still on PHP 5.x, you'll have to use version 2.x of this library)"),Object(o.b)("li",{parentName:"ul"},"PHP json extension"),Object(o.b)("li",{parentName:"ul"},"PHP libxml extension"),Object(o.b)("li",{parentName:"ul"},"PHP simplexml extension")),Object(o.b)("h2",{id:"installation"},"Installation"),Object(o.b)("p",null,"This project can be found on ",Object(o.b)("a",{parentName:"p",href:"https://packagist.org/packages/cmfcmf/openweathermap-php-api"},"Packagist"),"\nand is best installed using ",Object(o.b)("a",{parentName:"p",href:"http://getcomposer.org"},"Composer"),":"),Object(o.b)("pre",null,Object(o.b)("code",{parentName:"pre",className:"language-bash"},'composer require "cmfcmf/openweathermap-php-api"\n')),Object(o.b)("h3",{id:"required-psr-17-18-dependencies"},"Required PSR-17/-18 dependencies"),Object(o.b)("p",null,"You will also need to have two additional dependencies installed:"),Object(o.b)("ol",null,Object(o.b)("li",{parentName:"ol"},"A ",Object(o.b)("a",{parentName:"li",href:"https://www.php-fig.org/psr/psr-17/"},"PSR-17")," compatible HTTP factory implementation."),Object(o.b)("li",{parentName:"ol"},"A ",Object(o.b)("a",{parentName:"li",href:"https://www.php-fig.org/psr/psr-18/"},"PSR-18")," compatible HTTP client implementation.")),Object(o.b)("p",null,"I you are integrating this project into a PHP framework, it most likely already comes with these.\nOtherwise, go through the lists of implementations on Packagist and choose ones that fit your project:"),Object(o.b)("ul",null,Object(o.b)("li",{parentName:"ul"},Object(o.b)("a",{parentName:"li",href:"https://packagist.org/providers/psr/http-factory-implementation"},"List of PSR-17-compatible implementations")),Object(o.b)("li",{parentName:"ul"},Object(o.b)("a",{parentName:"li",href:"https://packagist.org/providers/psr/http-client-implementation"},"List of PSR-18-compatible implementations"))),Object(o.b)("p",null,"If you don't know which to choose, try these:"),Object(o.b)("pre",null,Object(o.b)("code",{parentName:"pre",className:"language-bash"},'composer require "http-interop/http-factory-guzzle:^1.0" \\\n                "php-http/guzzle6-adapter:^2.0 || ^1.0"\n')))}s.isMDXComponent=!0},88:function(e,t,r){"use strict";r.d(t,"a",(function(){return b})),r.d(t,"b",(function(){return d}));var n=r(0),a=r.n(n);function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function i(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function p(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?i(Object(r),!0).forEach((function(t){o(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):i(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function l(e,t){if(null==e)return{};var r,n,a=function(e,t){if(null==e)return{};var r,n,a={},o=Object.keys(e);for(n=0;n<o.length;n++)r=o[n],t.indexOf(r)>=0||(a[r]=e[r]);return a}(e,t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);for(n=0;n<o.length;n++)r=o[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(a[r]=e[r])}return a}var c=a.a.createContext({}),s=function(e){var t=a.a.useContext(c),r=t;return e&&(r="function"==typeof e?e(t):p(p({},t),e)),r},b=function(e){var t=s(e.components);return a.a.createElement(c.Provider,{value:t},e.children)},u={inlineCode:"code",wrapper:function(e){var t=e.children;return a.a.createElement(a.a.Fragment,{},t)}},m=a.a.forwardRef((function(e,t){var r=e.components,n=e.mdxType,o=e.originalType,i=e.parentName,c=l(e,["components","mdxType","originalType","parentName"]),b=s(r),m=n,d=b["".concat(i,".").concat(m)]||b[m]||u[m]||o;return r?a.a.createElement(d,p(p({ref:t},c),{},{components:r})):a.a.createElement(d,p({ref:t},c))}));function d(e,t){var r=arguments,n=t&&t.mdxType;if("string"==typeof e||n){var o=r.length,i=new Array(o);i[0]=m;var p={};for(var l in t)hasOwnProperty.call(t,l)&&(p[l]=t[l]);p.originalType=e,p.mdxType="string"==typeof e?e:n,i[1]=p;for(var c=2;c<o;c++)i[c]=r[c];return a.a.createElement.apply(null,i)}return a.a.createElement.apply(null,r)}m.displayName="MDXCreateElement"}}]);