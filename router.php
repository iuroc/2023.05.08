<?php
require_once('./config.php');
$router = true;
require_once('./header.php');
?>

<div class="poncon-home poncon-page" style="display: none;">
    <?php require('./index_body.php'); ?>
</div>

<div class="poncon-service poncon-page" style="display: none;">
<?php require('./service_body.php'); ?>
</div>

<div class="poncon-photo poncon-page" style="display: none;">
<?php require('./photo_body.php'); ?>
</div>

<div class="poncon-about poncon-page" style="display: none;">
<?php require('./about_body.php'); ?>
</div>

<div class="poncon-contact poncon-page" style="display: none;">
<?php require('./contact_body.php'); ?>
</div>

<script>
    var Poncon = /** @class */ (function() {
        function Poncon() {
            this.pages = {};
            this.pageNames = []; // 页面列表
        }
        /**
         * 切换页面显示
         * @param target 页面标识
         */
        Poncon.prototype.changeView = function(target) {
            if (!target) {
                return;
            }
            var eles = jQuery('.poncon-page')
            for (var i = 0; i < eles.length; i++)
                eles[i].style.display = 'none';
            var dom = jQuery(".poncon-".concat(target))[0];
            dom.style.display = '';
        };
        /**
         * 设置页面名称列表
         * @param pageNames 页面名称列表
         */
        Poncon.prototype.setPageList = function(pageNames) {
            var _this_1 = this;
            pageNames.forEach(function(target) {
                var dom = jQuery(".poncon-".concat(target))[0];
                _this_1.pages[target] = {
                    dom: dom,
                    event: (function() {}),
                    data: {}
                };
            });
            this.pageNames = pageNames;
        };
        /**
         * 配置页面
         * @param target 页面标识
         * @param func 页面载入事件
         */
        Poncon.prototype.setPage = function(target, func) {
            if (!target) {
                return;
            }
            this.pages[target]['event'] = func || (function() {});
        };
        /**
         * 开启路由系统
         */
        Poncon.prototype.start = function() {
            var _this = this;
            window.addEventListener('hashchange', function(event) {
                var hash = new URL(event.newURL).hash;
                _this.loadTarget(hash);
            });
            this.loadTarget();
        };
        /**
         * 切换页面并执行页面事件
         * @param hash 页面标识
         */
        Poncon.prototype.loadTarget = function(hash) {
            var target = this.getTarget(hash);
            var dom = this.getDom(target);
            var args = this.getArgs(hash);
            this.changeView(target);
            this.pages[target].event(dom, args, this.pages[target].data);
        };
        /**
         * 获取页面参数列表
         * @param hash 网址Hash
         * @returns 页面参数列表
         */
        Poncon.prototype.getArgs = function(hash) {
            var strs = (hash || location.hash).split('/');
            if (strs.length < 3) {
                return [];
            }
            return strs.slice(2);
        };
        /**
         * 获取当前页面标识, 支持自动矫正
         * @param hash 网址hash
         * @returns 页面标识
         */
        Poncon.prototype.getTarget = function(hash) {
            var strs = (hash || location.hash).split('/');
            var target = strs[1] || '';
            // target不合法或者不在白名单
            if (target.search(/^\w+$/) != 0 || this.pageNames.indexOf(target) == -1) {
                history.replaceState({}, '', "".concat(location.pathname));
                return 'home';
            }
            return target;
        };
        /**
         * 获取页面DOM
         * @param target 页面标识
         * @returns 页面DOM元素
         */
        Poncon.prototype.getDom = function(target) {
            return jQuery(".poncon-".concat(target))[0];
        };
        return Poncon;
    }());
    const poncon = new Poncon()
    poncon.setPageList(['home', 'service', 'photo', 'about', 'contact'])
    poncon.start()
</script>
<?php
require_once('./footer.php');
