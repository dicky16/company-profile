/*! textrollers 0.0.1 */
(function() {
    var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F = [].slice;
    t = '<span class="textroller-value"></span>', p = '<span class="textroller-ribbon"><span class="textroller-ribbon-inner">' + t + "</span></span>", g = '<span class="textroller-digit"><span class="textroller-digit-spacer">8</span><span class="textroller-digit-inner">' + p + "</span></span>", j = '<span class="textroller-formatting-mark"></span>', c = 32, b = 123, a = b - c, f = "d", k = /^\(?([^)]*)\)?(?:(.)(d+))?$/, l = 30, i = 2e3, d = 20, m = 2, h = .5, n = 1e3 / l, e = 1e3 / d, q = "transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd", z = document.createElement("div").style, r = null != z.transition || null != z.webkitTransition || null != z.mozTransition || null != z.oTransition, x = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame, o = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver, u = function(a) {
        var b;
        return b = document.createElement("div"), b.innerHTML = a, b.children[0]
    }, w = function() {
        var a, b;
        return null != (a = null != (b = window.performance) ? "function" == typeof b.now ? b.now() : void 0 : void 0) ? a : +new Date
    }, y = function(a, b) {
        return null == b && (b = 0), a
    }, v = function() {}, B = !1, (A = function() {
        var a, b, c, d, e;
        if (!B && null != window.jQuery) {
            for (B = !0, d = ["html", "text"], e = [], b = 0, c = d.length; c > b; b++) a = d[b], e.push(function(a) {
                var b;
                return b = window.jQuery.fn[a], window.jQuery.fn[a] = function(a) {
                    var c;
                    return null == a || null == (null != (c = this[0]) ? c.textroller : void 0) ? b.apply(this, arguments) : this[0].textroller.update(a)
                }
            }(a));
            return e
        }
    })(), setTimeout(A, 0), s = function() {
        function b(a) {
            var c, d, e, f, g, h, j, k, l, o, p, q, r, s, t = this;
            this.options = a;
            try {
                if (this.el = this.options.el, null != this.el.textroller) return this.el.textroller;
                for (this.el.textroller = this, p = b.options, f = j = 0, l = p.length; l > j; f = ++j) d = p[f], null == this.options[d] && (this.options[d] = f);
                null == (g = this.options).duration && (g.duration = i), this.options.valuesIndex = 0, this.options.values = this.cleanArray(), this.MAX_VALUES = 0 | this.options.duration / n / m, this.resetFormat(), this.value = this.cleanValue(null != (q = this.options.values[0]) ? q : ""), this.renderInside(), this.render();
                try {
                    for (r = ["HTML", "Text"], h = function(a) {
                            return Object.defineProperty(t.el, "inner" + a, {
                                get: function() {
                                    return t.inside["outer" + a]
                                },
                                set: function(a) {
                                    return t.update(a)
                                }
                            })
                        }, k = 0, o = r.length; o > k; k++) e = r[k], h(e)
                } catch (u) {
                    c = u, this.watchForMutations()
                }
                setInterval(function() {
                    var a, b;
                    try {
                        if (null != (b = t.options.loop) ? b : !0) return t.options.valuesIndex >= t.options.values.length - 1 ? t.options.valuesIndex = 0 : t.options.valuesIndex++, a = t.options.values[t.options.valuesIndex], $(t.el).html(a);
                        if (t.options.valuesIndex < t.options.values.length - 1) return t.options.valuesIndex++, a = t.options.values[t.options.valuesIndex], $(t.el).html(a)
                    } catch (d) {
                        return c = d
                    }
                }, null != (s = this.options.delay) ? s : 3e3)
            } catch (u) {}
        }
        return b.prototype.cleanArray = function() {
            var a, b, c, d, e, f, g, h, i, j, k;
            for (d = this.maxLength(this.options.values), j = this.options.values, c = g = 0, i = j.length; i > g; c = ++g) {
                if (b = j[c], e = b.split(""), a = null != (k = (d - b.length) / 2) ? k : 0, a > 0)
                    for (f = h = 1; a >= 1 ? a >= h : h >= a; f = a >= 1 ? ++h : --h) "left" === this.options.align ? e.push("  ") : "right" === this.options.align ? e.unshift("  ") : (e.push(" "), e.unshift(" "));
                this.options.values[c] = e.join("")
            }
            return this.options.values
        }, b.prototype.maxLength = function(a) {
            var b, c, d, e;
            for (c = 0, d = 0, e = a.length; e > d; d++) b = a[d], b.length > c && (c = b.length);
            return c
        }, b.prototype.renderInside = function() {
            return this.inside = document.createElement("div"), this.inside.className = "textroller-inside", this.el.innerHTML = "", this.el.appendChild(this.inside)
        }, b.prototype.watchForMutations = function() {
            var a, b = this;
            if (null != o) try {
                return null == this.observer && (this.observer = new o(function() {
                    var a;
                    return a = b.el.innerText, b.renderInside(), b.render(b.value), b.update(a)
                })), this.watchMutations = !0, this.startWatchingMutations()
            } catch (c) {
                a = c
            }
        }, b.prototype.startWatchingMutations = function() {
            return this.watchMutations ? this.observer.observe(this.el, {
                childList: !0
            }) : void 0
        }, b.prototype.stopWatchingMutations = function() {
            var a;
            return null != (a = this.observer) ? a.disconnect() : void 0
        }, b.prototype.intToChar = function(a) {
            return a = String.fromCharCode(a + c)
        }, b.prototype.cleanValue = function(a) {
            var b;
            return "string" == typeof a ? (a = a.split(""), a = function() {
                var d, e, f;
                for (f = [], d = 0, e = a.length; e > d; d++) b = a[d], f.push(b.charCodeAt(0) - c);
                return f
            }()) : "object" == typeof a && (a = function() {
                var d, e, f;
                for (f = [], d = 0, e = a.length; e > d; d++) b = a[d], f.push(b.charCodeAt(0) - c);
                return f
            }()), a
        }, b.prototype.bindTransitionEnd = function() {
            var a, b, c, d, e, f, g = this;
            if (!this.transitionEndBound) {
                for (this.transitionEndBound = !0, b = !1, e = q.split(" "), f = [], c = 0, d = e.length; d > c; c++) a = e[c], f.push(this.el.addEventListener(a, function() {
                    return b ? !0 : (b = !0, setTimeout(function() {
                        return g.render(), b = !1
                    }, 0), !0)
                }, !1));
                return f
            }
        }, b.prototype.resetFormat = function() {
            var a, b, c, d, e, g, h, i;
            if (a = null != (h = this.options.format) ? h : f, a || (a = "d"), c = k.exec(a), !c) throw new Error("TextRollers: Unparsable digit format");
            return i = c.slice(1, 4), g = i[0], e = i[1], b = i[2], d = (null != b ? b.length : void 0) || 0, this.format = {
                repeating: g,
                radix: e,
                precision: d
            }
        }, b.prototype.render = function(a) {
            var b, c, d, e, f, g, h, i, j, k, l, m;
            for (null == a && (a = this.value), this.stopWatchingMutations(), this.resetFormat(), this.inside.innerHTML = "", g = this.options.theme, b = this.el.className.split(" "), f = [], i = 0, k = b.length; k > i; i++) c = b[i], c.length && ((e = /^textroller-theme-(.+)$/.exec(c)) ? g = e[1] : /^textroller(-|$)/.test(c) || f.push(c));
            for (f.push("textroller"), r || f.push("textroller-no-transitions"), g ? f.push("textroller-theme-" + g) : f.push("textroller-auto-theme"), this.el.className = f.join(" "), this.ribbons = {}, this.digits = [], h = !this.format.precision || !v(a) || !1, m = a.reverse(), j = 0, l = m.length; l > j; j++) d = m[j], this.intToChar(d === this.format.radix) && (h = !0), this.addDigit(d, h);
            return this.startWatchingMutations()
        }, b.prototype.update = function(a) {
            var b = this;
            return a = this.cleanValue(a), a !== this.value ? (this.el.className += a > this.value ? " textroller-animating-up" : " textroller-animating-down", this.stopWatchingMutations(), this.animate(a), this.startWatchingMutations(), setTimeout(function() {
                return b.el.offsetHeight, b.el.className += " textroller-animating"
            }, 0), this.value = a) : void 0
        }, b.prototype.renderDigit = function() {
            return u(g)
        }, b.prototype.insertDigit = function(a, b) {
            return null != b ? this.inside.insertBefore(a, b) : this.inside.children.length ? this.inside.insertBefore(a, this.inside.children[0]) : this.inside.appendChild(a)
        }, b.prototype.addSpacer = function(a, b, c) {
            var d;
            return d = u(j), d.innerHTML = a, c && (d.className += " " + c), this.insertDigit(d, b)
        }, b.prototype.addDigit = function(a, b) {
            var c, d, e;
            if (null == b && (b = !0), "-" === a) return this.addSpacer(a, null, "textroller-negation-mark");
            if (a === this.format.radix) return this.addSpacer(a, null, "textroller-radix-mark");
            if (b)
                for (e = !1;;) {
                    if (!this.format.repeating.length) {
                        if (e) throw new Error("Bad textroller format without digits");
                        this.resetFormat(), e = !0
                    }
                    if (c = this.format.repeating[this.format.repeating.length - 1], this.format.repeating = this.format.repeating.substring(0, this.format.repeating.length - 1), "d" === c) break;
                    this.addSpacer(c)
                }
            return d = this.renderDigit(), d.querySelector(".textroller-value").innerHTML = this.intToChar(a), this.digits.push(d), this.insertDigit(d)
        }, b.prototype.animate = function(a) {
            return r && "count" !== this.options.animation ? this.animateSlide(a) : this.animateCount(a)
        }, b.prototype.valDiff = function(a, b) {
            var c, d, e, f, g;
            for (c = [], d = Math.max(b.length, a.length), e = f = 0, g = d - 1; g >= 0 ? g >= f : f >= g; e = g >= 0 ? ++f : --f) c[e] = (b[e] || 0) - (a[e] || 0);
            return c
        }, b.prototype.noChanges = function(a) {
            var b, c, d;
            for (c = 0, d = a.length; d > c; c++)
                if (b = a[c], b !== !1) return !0;
            return !1
        }, b.prototype.animateCount = function(a) {
            var b, c, d, f, g, h = this;
            if (c = +a - this.value) return f = d = w(), b = this.value, (g = function() {
                var i, j, k;
                return w() - f > h.options.duration ? (h.value = a, h.render(), void 0) : (i = w() - d, i > e && (d = w(), k = i / h.options.duration, j = c * k, b += j, h.render(Math.round(b))), null != x ? x(g) : setTimeout(g, e))
            })()
        }, b.prototype.getDigitCount = function() {
            var a, b, c, d, e, f, g;
            for (e = 1 <= arguments.length ? F.call(arguments, 0) : [], a = 0, b = f = 0, g = e.length; g > f; b = ++f) d = e[b], d.length > a && (a = d.length), e[b] = Math.abs(d);
            return c = Math.max.apply(Math, e), Math.ceil(Math.log(c + 1) / Math.log(10)), a
        }, b.prototype.getFractionalDigitCount = function() {
            var a, b, c, d, e, f, g;
            for (e = 1 <= arguments.length ? F.call(arguments, 0) : [], b = /^\d*\.(\d*?)0*$/, a = f = 0, g = e.length; g > f; a = ++f) d = e[a], e[a] = d.toString(), c = b.exec(e[a]), e[a] = null == c ? 0 : c[1].length;
            return Math.max.apply(Math, e)
        }, b.prototype.resetDigits = function() {
            return this.digits = [], this.ribbons = [], this.inside.innerHTML = "", this.resetFormat()
        }, b.prototype.animateSlide = function(b) {
            var c, d, e, f, g, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F, G, H, I;
            if (t = this.value, k = 0, k && (b *= Math.pow(10, k), t *= Math.pow(10, k)), e = this.valDiff(b, this.value), this.noChanges(e)) {
                for (this.bindTransitionEnd(), f = this.getDigitCount(t, b), g = [], c = 0, n = x = F = f - 1; 0 >= F ? 0 >= x : x >= 0; n = 0 >= F ? ++x : --x) {
                    if (u = Math.floor(t[n]), j = Math.floor(b[f - 1 - n]), i = j - u, Math.abs(i) > this.MAX_VALUES) {
                        for (m = [], o = i / (this.MAX_VALUES + this.MAX_VALUES * c * h), d = u; i > 0 && j > d || 0 > i && d > j;) m.push(Math.round(d)), d += o;
                        m[m.length - 1] !== j && m.push(j), c++
                    } else m = function() {
                        I = [];
                        for (var a = u; j >= u ? j >= a : a >= j; j >= u ? a++ : a--) I.push(a);
                        return I
                    }.apply(this);
                    for (n = y = 0, A = m.length; A > y; n = ++y) l = m[n], m[n] = Math.abs(l % a);
                    g.push(m)
                }
                for (this.resetDigits(), G = g.reverse(), n = z = 0, B = G.length; B > z; n = ++z) {
                    for (m = G[n], this.digits[n] || this.addDigit(" ", !1), null == (w = this.ribbons)[n] && (w[n] = this.digits[n].querySelector(".textroller-ribbon-inner")), this.ribbons[n].innerHTML = "", r = [], v = D = 0, H = f - 1; H >= 0 ? H >= D : D >= H; v = H >= 0 ? ++D : --D) r[v] = 0;
                    for (e > r && (m = m.reverse()), p = E = 0, C = m.length; C > E; p = ++E) l = m[p], s = document.createElement("div"), s.className = "textroller-value", s.innerHTML = this.intToChar(l), this.ribbons[n].appendChild(s), p === m.length - 1 && (s.className += " textroller-last-value"), 0 === p && (s.className += " textroller-first-value")
                }
                return q = this.inside.querySelector(".textroller-radix-mark"), null != q && q.parent.removeChild(q), k ? this.addSpacer(this.format.radix, this.digits[k - 1], "textroller-radix-mark") : void 0
            }
        }, b
    }(), s.options = null != (D = window.textrollerOptions) ? D : {}, setTimeout(function() {
        var a, b, c, d, e;
        if (window.textrollerOptions) {
            d = window.textrollerOptions, e = [];
            for (a in d) b = d[a], e.push(null != (c = s.options)[a] ? (c = s.options)[a] : c[a] = b);
            return e
        }
    }, 0), s.init = function() {
        var a, b, c, d, e;
        if (null != document.querySelectorAll) {
            for (b = document.querySelectorAll(s.options.selector || ".textroller"), e = [], c = 0, d = b.length; d > c; c++) a = b[c], e.push(a.textroller = new s({
                el: a,
                values: [a.innerText, "A", "B", "C"]
            }));
            return e
        }
    }, null != (null != (E = document.documentElement) ? E.doScroll : void 0) && null != document.createEventObject ? (C = document.onreadystatechange, document.onreadystatechange = function() {
        return "complete" === document.readyState && s.options.auto !== !1 && s.init(), null != C ? C.apply(this, arguments) : void 0
    }) : document.addEventListener("DOMContentLoaded", function() {
        return s.options.auto !== !1 ? s.init() : void 0
    }, !1), window.TextRollers = s
}).call(this);