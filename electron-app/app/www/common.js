"use strict";

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//验证函数集合
var jsValidate = function () {
	var result = {
		messages: {
			required: "这是必填字段",
			remote: "请修正此字段",
			email: "请输入有效的电子邮件地址",
			url: "请输入有效的网址",
			date: "请输入有效的日期",
			dateISO: "请输入有效的日期 (YYYY-MM-DD)",
			number: "请输入有效的数字",
			digits: "只能输入数字",
			creditcard: "请输入有效的信用卡号码",
			equalTo: "你的输入不相同",
			extension: "请输入有效的后缀",
			minlength: "输入字数过短",
			maxlength: "输入字数过长",
			mphone: "请输入正确的手机号格式",
			tphone: "请输入正确的电话格式",
			idCard: "请输入正确的身份证格式",
			postal: "请输入正确的邮编格式",
			pnumber: "只能输入字母、数字、‘_’、‘-’",
            psw: "密码格式不合法",
            fixphone:"请输入正确的电话格式",
		},
		required: function required(value, param) {
			if (this.isarr(value)) {
				if (value.length > 0) {
					for (var idx in value) {
						if (!value[idx]) {
							return false;
						}
					}
					return true;
				}
				return false;
			}
			return value != undefined ? value.toString().length > 0 : false;
		},
		email: function email(value) {
			return (/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(value)
			);
		},
		url: function url(value) {
			return (/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(value)
			);
		},
		date: function date(value) {
			return !/Invalid|NaN/.test(new Date(value).toString());
		},
		dateISO: function dateISO(value) {
			return (/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(value)
			);
		},
		number: function number(value) {
			return (/^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(value)
			);
		},
		digits: function digits(value) {
			return (/^\d+$/.test(value)
			);
		},
		isarr: function isarr(o) {
			return Object.prototype.toString.call(o) == '[object Array]';
		},
		minlength: function minlength(value, param) {
			return value.length >= param;
		},
		maxlength: function maxlength(value, param) {
			return value.length <= param;
		},
		rangelength: function rangelength(value, param) {
			var length = $.isArray(value) ? value.length : this.getLength(value);
			return length >= param[0] && length <= param[1];
		},
		min: function min(value, param) {
			return value >= param;
		},
		max: function max(value, param) {
			return value <= param;
		},
		range: function range(value, param) {
			return value >= param[0] && value <= param[1];
		},
		equalTo: function equalTo(value, param) {
			return value === param;
		},
		mphone: function mphone(value) {
			return (/^[1][3|4|5|6|8|7|9][0-9]{9}$/.test(value)
			);
		},
		tphone: function tphone(value) {
			return (/^[+]{0,1}(\d){1,3}[ ]?([-]?((\d)|[ ]){1,12})+$/.test(value)
			);
		},
		fixphone: function fixphone(value){
			return (/0\d{2,3}-\d{7,8}/.test(value)
			);
		},
		idCard: function idCard(str) {
			return (/^(^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$)|(^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])((\d{4})|\d{3}[Xx])$)$/.test(str)
			);
		},
		postal: function postal(value) {
			return (/^[a-zA-Z0-9 ]{3,12}$/g.test(value)
			);
		},
		pnumber: function pnumber(value) {
			return (/^[\w-]*$/g.test(value)
			);
		},
        psw: function psw(value) {
            return (/^[\da-zA-Z]{6,20}$/.test(value)
            );
        },
        //验证金额小数位
        pricerule: function(value,fix){
        	var ret=/^(([1-9][0-9]*)|(([0]\.\d{1,1}|[1-9][0-9]*\.\d{1,1})))$/;
        	var ret2=/^(([1-9][0-9]*)|(([0]\.\d{1,2}|[1-9][0-9]*\.\d{1,2})))$/;
        	var ret3=/^(([1-9][0-9]*)|(([0]\.\d{1,3}|[1-9][0-9]*\.\d{1,3})))$/;
        	var ret4=/^(([0-9]*)|(([0]\.\d{1,3}|[0-9]*\.\d{1,3})))$/;
        	var ret5=/^(([0-9]*)|(([0]\.\d{1,4}|[0-9]*\.\d{1,4})))$/;
        	if(fix == 1){
        		if(!ret.test(value)){
        			return false;
        		}
        	}else if(fix == 2){
        		if(!ret2.test(value)){
        			return false;
        		}
        	}else if(fix == 3){
        		if(!ret3.test(value)){
        			return false;
        		}
        	}else if(fix == 4){
        		if(!ret4.test(value)){
        			return false;
        		}
        	}else if(fix == 5){
        		if(!ret5.test(value)){
        			return false;
        		}
        	}
        	return true;
        }
	};
	return result;
}();
//运算
var jsCalculate = function () {
	var result = {
		/**
   ** @desc 加法函数，用来得到精确的加法结果
   ** @desc 说明：javascript的加法结果会有误差，在两个浮点数相加的时候会比较明显。这个函数返回较为精确的加法结果。
   ** @param  {Number} 
   ** @param {Number} accAdd(arg1,arg2)
   ** @return {Number} arg1加上arg2的精确结果
   **/
		accAdd: function accAdd(arg1, arg2) {
			var r1, r2, m, c;
			try {
				r1 = arg1.toString().split(".")[1].length;
			} catch (e) {
				r1 = 0;
			}
			try {
				r2 = arg2.toString().split(".")[1].length;
			} catch (e) {
				r2 = 0;
			}
			c = Math.abs(r1 - r2);
			m = Math.pow(10, Math.max(r1, r2));
			if (c > 0) {
				var cm = Math.pow(10, c);
				if (r1 > r2) {
					arg1 = Number(arg1.toString().replace(".", ""));
					arg2 = Number(arg2.toString().replace(".", "")) * cm;
				} else {
					arg1 = Number(arg1.toString().replace(".", "")) * cm;
					arg2 = Number(arg2.toString().replace(".", ""));
				}
			} else {
				arg1 = Number(arg1.toString().replace(".", ""));
				arg2 = Number(arg2.toString().replace(".", ""));
			}
			return (arg1 + arg2) / m;
		},
		/**
   ** @desc 减法函数，用来得到精确的减法结果
   ** @desc 说明：javascript的减法结果会有误差，在两个浮点数相减的时候会比较明显。这个函数返回较为精确的减法结果。
   ** @param  {Number} 
   ** @param {Number} accSub(arg1,arg2)
   ** @return {Number} arg1加上arg2的精确结果
   **/
		accSub: function accSub(arg1, arg2) {
			var r1, r2, m, n;
			try {
				r1 = arg1.toString().split(".")[1].length;
			} catch (e) {
				r1 = 0;
			}
			try {
				r2 = arg2.toString().split(".")[1].length;
			} catch (e) {
				r2 = 0;
			}
			m = Math.pow(10, Math.max(r1, r2)); //last modify by deeka //动态控制精度长度
			n = r1 >= r2 ? r1 : r2;
			return ((arg1 * m - arg2 * m) / m).toFixed(n);
		},
		/**
   ** @desc 乘法函数，用来得到精确的乘法结果
   ** @desc 说明：javascript的乘法结果会有误差，在两个浮点数相乘的时候会比较明显。这个函数返回较为精确的乘法结果。
   ** @param  {Number} 
   ** @param {Number} accMul(arg1,arg2)
   ** @return {Number} arg1乘以 arg2的精确结果
   **/
		accMul: function accMul(arg1, arg2) {
			var m = 0,
			    s1 = arg1.toString(),
			    s2 = arg2.toString();
			try {
				m += s1.split(".")[1].length;
			} catch (e) {}
			try {
				m += s2.split(".")[1].length;
			} catch (e) {}
			return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m);
		},
		/** 
   ** @desc 除法函数，用来得到精确的除法结果
   ** @desc 说明：javascript的除法结果会有误差，在两个浮点数相除的时候会比较明显。这个函数返回较为精确的除法结果。
   ** @param  {Number} 
   ** @param {Number} accDiv(arg1,arg2)
   ** @return {Number} arg1除以arg2的精确结果
   **/
		accDiv: function accDiv(arg1, arg2) {
			var t1 = 0,
			    t2 = 0,
			    r1,
			    r2;
			try {
				t1 = arg1.toString().split(".")[1].length;
			} catch (e) {}
			try {
				t2 = arg2.toString().split(".")[1].length;
			} catch (e) {}
			if (Math) {
				r1 = Number(arg1.toString().replace(".", ""));
				r2 = Number(arg2.toString().replace(".", ""));
				return r1 / r2 * Math.pow(10, t2 - t1);
			}
		}
	};
	return result;
}();
var jsString = function () {
	var result = {
		/**
  * 
  * @desc 删除左右两端的空格
  * @param {String}
  * @return {String}
  */
		trim: function trim(s) {
			return s.replace(/(^\s*)|(\s*$)/g, '');
		},
		/**
  * @desc 删除右边的空格
  * @param {String}
  * @return {String}
  */
		rtrim: function rtrim(s) {
			return s.replace(/(\s*$)/g, '');
		},
		/**
  * @desc 删除左边的空格
  * @param {String}
  * @return {String}
  */
		ltrim: function ltrim(s) {
			return s.replace(/(^\s*)/g, '');
		},
		/**
   * 
   * @desc   全部替换
   * @param  {String} 原始字符串
   * @param  {String} 搜索字符串
   * @param  {String} 替换字符串
   * @return {String}
   */
		replaceAll: function replaceAll(s0, s1, s2) {
			return s0.replace(new RegExp(s1, "gm"), s2);
		},
		/**
  * 
  * @desc 英文首字母大写
  * @param {String}
  * @return {String}
  */
		ucfirst: function ucfirst(str) {
			var str = str.toLowerCase();
			str = str.replace(/\b\w+\b/g, function (word) {
				return word.substring(0, 1).toUpperCase() + word.substring(1);
			});
			return str;
		},
		/**   
   * @desc 字符串数据翻转
   * @param   {String}            
   * @return  {Object}     数组   
   */
		reverse: function reverse(s) {
			if (s) return s.split("").reverse().join('');
			return '';
		},
		/**
   * 
   * @desc   现金额转大写
   * @param  {Number} n 
   * @return {String}
   */
		digitUppercase: function digitUppercase(n) {
			var fraction = ['角', '分'];
			var digit = ['零', '壹', '贰', '叁', '肆', '伍', '陆', '柒', '捌', '玖'];
			var unit = [['元', '万', '亿'], ['', '拾', '佰', '仟']];
			var head = n < 0 ? '欠' : '';
			n = Math.abs(n);
			var s = '';
			for (var i = 0; i < fraction.length; i++) {
				s += (digit[Math.floor(n * 10 * Math.pow(10, i)) % 10] + fraction[i]).replace(/零./, '');
			}
			s = s || '整';
			n = Math.floor(n);
			for (var i = 0; i < unit[0].length && n > 0; i++) {
				var p = '';
				for (var j = 0; j < unit[1].length && n > 0; j++) {
					p = digit[n % 10] + unit[1][j] + p;
					n = Math.floor(n / 10);
				}
				s = p.replace(/(零.)*零$/, '').replace(/^$/, '零') + unit[0][i] + s;
			}
			return head + s.replace(/(零.)*零元/, '元').replace(/(零.)+/g, '零').replace(/^整$/, '零元整');
		}
	};
	return result;
}();
var jsArray = function () {
	var result = {
		/**   
   * @desc json格式转树状结构   
   * @param   {json}      json数据   
   * @param   {String}    id的字符串   
   * @param   {String}    父id的字符串   
   * @param   {String}    children的字符串   
   * @return  {Array}     数组   
   */
		array2Tree: function array2Tree(a, idStr, pidStr, chindrenStr) {
			var r = [],
			    hash = {},
			    id = idStr,
			    pid = pidStr,
			    children = chindrenStr,
			    i = 0,
			    j = 0,
			    len = a.length;
			for (; i < len; i++) {
				hash[a[i][id]] = a[i];
			}
			for (; j < len; j++) {
				var aVal = a[j],
				    hashVP = hash[aVal[pid]];
				if (hashVP) {
					!hashVP[children] && (hashVP[children] = []);
					hashVP[children].push(aVal);
				} else {
					r.push(aVal);
				}
			}
			return r;
		},
		/**
   * 
   * @desc 判断两个数组是否相等
   * @param {Array} arr1 
   * @param {Array} arr2 
   * @return {Boolean}
   */
		arrayEqual: function arrayEqual(arr1, arr2) {
			if (arr1 === arr2) return true;
			if (arr1.length != arr2.length) return false;
			for (var i = 0; i < arr1.length; ++i) {
				if (arr1[i] !== arr2[i]) return false;
			}
			return true;
		},
		/**
   * 
   * @desc 数组去重
   * @param {Array} 
   * @return {Array}
   */
		unique: function unique(a) {
			return Array.from(new Set(a));
		},
		/**
   * @desc 浅拷贝，支持常见类型
   * @param {Any} values
   * @return {json}
   */
		copy: function copy(o) {
			return JSON.parse(JSON.stringify({ d: o })).d;
		},
		/** 
   * @desc 计算数组项出现次数
   * @param {Array} 
   * @param {String|Number|Boolean}
   * @return {Number}
   */
		countArray: function countArray(arr, value) {
			if (Array.isArray(arr)) {
				return value ? arr.reduce(function (a, v) {
					return v === value ? a + 1 : a + 0;
				}, 0) : arr.length;
			}return 0;
		},
		/**
   * @desc 深拷贝，支持常见类型
   * @param {Any} values
   */
		deepClone: function (_deepClone) {
			function deepClone(_x) {
				return _deepClone.apply(this, arguments);
			}

			deepClone.toString = function () {
				return _deepClone.toString();
			};

			return deepClone;
		}(function (values) {
			var copy;
			// Handle the 3 simple types, and null or undefined
			if (null == values || "object" != (typeof values === "undefined" ? "undefined" : _typeof(values))) return values;
			// Handle Date
			if (values instanceof Date) {
				copy = new Date();
				copy.setTime(values.getTime());
				return copy;
			}
			// Handle Array
			if (values instanceof Array) {
				copy = [];
				for (var i = 0, len = values.length; i < len; i++) {
					copy[i] = deepClone(values[i]);
				}
				return copy;
			}
			// Handle Object
			if (values instanceof Object) {
				copy = {};
				for (var attr in values) {
					if (values.hasOwnProperty(attr)) copy[attr] = deepClone(values[attr]);
				}
				return copy;
			}
			throw new Error("Unable to copy values! Its type isn't supported.");
		}),
		/**
   * @desc 生成返回数组
   * @param {Number} start 
   * @param {Number} end
   * @return {Array} 
   */
		initRangeArray: function initRangeArray(start, end) {
			if (typeof end != "number") {
				end = start;
				start = 0;
			}
			return Array.apply(null, Array(end - start)).map(function (v, i) {
				return i + start;
			});
		},
		/**
   * @desc 判断是否是数组
   * @param {Any} values
   * @return {Boolean}
   */
		isArray: function isArray(a) {
			if (Array.isArray) return Array.isArray(a);
			return Object.prototype.toString.call(a) == '[object Array]';
		},
		/**
   * 
   * @desc   判断`obj`是否为空
   * @param  {Object} obj
   * @return {Boolean}
   */
		isEmpty: function isEmpty(obj) {
			if ((typeof obj === "undefined" ? "undefined" : _typeof(obj)) == 'object') {
				if (Array.isArray(obj)) return obj.length <= 0;else return !Object.keys(obj).length;
			}
			return false;
		},
		/**
   * @desc kv json  转 Select option 数组
   * @param {Object} o  
   * @param {String|Number} t  
   * @param {String|Number} v  
   * @return {Object} 
   */
		obj2OptionArr: function obj2OptionArr(o, t, v) {
			var l = [];
			for (var i in o) {
				var c = {};
				c[t] = i;
				c[v] = o[i];
				l.push(c);
			}
			return l;
		},
		/**
   * @desc Select option数组 转 kv json
   * @param {Array} l 对象数组[{value: '选项1',label: '黄金糕'}, {value: '选项2',label: '双皮奶'},...]
   * @param {String|Number} t key值 例如:"label"
   * @param {String|Number} v value值 例如:"value"
   * @return {Object}  {'黄金糕':'选项1'}
   */
		optionArr2Obj: function optionArr2Obj(l, t, v) {
			var c = {};
			var _iteratorNormalCompletion = true;
			var _didIteratorError = false;
			var _iteratorError = undefined;

			try {
				for (var _iterator = l[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
					var i = _step.value;

					if (!c[i[t]]) c[i[t]] = i[v];
				}
			} catch (err) {
				_didIteratorError = true;
				_iteratorError = err;
			} finally {
				try {
					if (!_iteratorNormalCompletion && _iterator.return) {
						_iterator.return();
					}
				} finally {
					if (_didIteratorError) {
						throw _iteratorError;
					}
				}
			}

			return c;
		},
		/**   
   * @desc json数据翻转 key value翻转或 数组翻转  
   * @param   {json}      json数据       
   * @return  {Object}       
   */
		reverse: function reverse(obj) {
			if ((typeof obj === "undefined" ? "undefined" : _typeof(obj)) == 'object') {
				if (Array.isArray(obj)) return obj.reverse();
				var o = new Object();
				for (var k in obj) {
					o[obj[k]] = k;
				}
				return o;
			}
		},
		/**
		 * @desc 两个数组取差集 
	     * @param   {Array} a 
	     * @param   {Array} b        
	     * @return  {Array}     
		 */
		intersect: function(a, b){
			return $.merge(
					$.grep(a, function(i){
						return $.inArray(i, b) == -1;
					}), 
					$.grep(b, function(i){
						return $.inArray(i, a) == -1;
					})
				);
		},
		/**
		 * @desc 两个数组对象取差集 
	     * @param   {Array} a 
	     * @param   {Array} b 
	     * @param   {String} c  比较键名       
	     * @return  {Array}     
		 */
		intersectObject: function(a, b, c){
			return $.merge(
					$.grep(a, function(i){
						var flag=true;
						$.each(b,function(idx,item){
							if(item[c]==i[c]){
								flag=false;
								return false;
							}
						});
						
						return flag;
					}), 
					$.grep(b, function(i){
						var flag=true;
						$.each(a,function(idx,item){
							if(item[c]==i[c]){
								flag=false;
								return false;
							}
						});
						
						return flag;
					})
				);
		},
		/**
		 * @desc 数组对象中查找元素
	     * @param   {Array} a  
	     * @param   {String} b  查找键值
	     * @param   {String} c  查找键名       
	     * @return  {Boolean}     
		 */
		inObjectArray: function(a,b,c){
			var flag = false;
			$.each(a,function(idx,item){
				if(item[c] && item[c] == b){
					flag=true;
					return false;
				}
			}); 
			return flag;
		},
		/**
		 * @desc json对象转数组
	     * @param   {Object} json  
	     * @return  {Array} Data    
		 */
		jsonToArray: function(json){
			var Data = new Array();
			$.each(json,function(i,item){
				Data.push(item);
			});
			return Data;
		}
	};
	return result;
}();