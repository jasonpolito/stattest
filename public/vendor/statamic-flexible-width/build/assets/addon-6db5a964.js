function p(i,e,s,l,n,d,a,u){var t=typeof i=="function"?i.options:i;e&&(t.render=e,t.staticRenderFns=s,t._compiled=!0),l&&(t.functional=!0),d&&(t._scopeId="data-v-"+d);var r;if(a?(r=function(o){o=o||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext,!o&&typeof __VUE_SSR_CONTEXT__<"u"&&(o=__VUE_SSR_CONTEXT__),n&&n.call(this,o),o&&o._registeredComponents&&o._registeredComponents.add(a)},t._ssrRegister=r):n&&(r=u?function(){n.call(this,(t.functional?this.parent:this).$root.$options.shadowRoot)}:n),r)if(t.functional){t._injectStyles=r;var c=t.render;t.render=function(v,h){return r.call(h),c(v,h)}}else{var f=t.beforeCreate;t.beforeCreate=f?[].concat(f,r):[r]}return{exports:i,options:t}}const _={mixins:[Fieldtype],data(){return{isHovering:!1,hoveringOverIndex:0,index:0}},computed:{selectedIndex(){return this.isHovering?this.hoveringOverIndex:this.index},selectedOption(){return this.isHovering?this.options[this.hoveringOverIndex]:this.options[this.index]},options(){return Object.entries(this.config.options).map(([i,e])=>({key:i,value:e}))}},methods:{setValue(i){const e=this.options[i];this.$emit("input",e.key),this.index=i},findOptionIndexFromKey(i){let e=this.options.findIndex(s=>s.key==i);return e!==-1?e:0}},mounted(){this.index=this.findOptionIndexFromKey(this.value),this.hoveringOverIndex=this.index}};var m=function(){var e=this,s=e._self._c;return s("div",{staticClass:"width-fieldtype"},[s("div",{staticClass:"width-fieldtype field-width-selector",on:{mouseenter:function(l){e.isHovering=!0},mouseleave:function(l){e.isHovering=!1}}},[s("div",{staticClass:"w-full flex"},e._l(e.options,function(l,n){return s("div",{key:n,class:["field-width-notch","notch-"+n,{filled:e.selectedIndex>=n,selected:e.selectedIndex==n}],on:{mouseenter:function(d){d.stopPropagation(),e.hoveringOverIndex=n},click:function(d){return e.setValue(n)}}})}),0),s("div",{staticClass:"field-width-label"},[e._v(e._s(e.selectedOption.value))])])])},g=[],C=p(_,m,g,!1,null,null,null,null);const O=C.exports;class y{constructor(){this.bootExtensions()}bootExtensions(){return Statamic.$components.register("flexible_width-fieldtype",O),this}}Statamic.booting(()=>{new y});
