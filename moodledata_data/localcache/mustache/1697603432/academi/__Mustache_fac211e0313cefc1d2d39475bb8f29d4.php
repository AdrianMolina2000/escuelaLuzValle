<?php

class __Mustache_fac211e0313cefc1d2d39475bb8f29d4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footersmall');
        $buffer .= $this->sectionE43fae7703392787aa4aff365b1dde01($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-popover footer-dark text-light">
';
            $buffer .= $indent . '        <div id="footer" ';
            $value = $context->find('footerbgimgclass');
            $buffer .= $this->sectionAd35e9a3cbf48574b19da6c4e65afc4e($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '            <div class="footer-main">
';
            $buffer .= $indent . '                <div class="container-fluid">
';
            $buffer .= $indent . '                    <div id="course-footer">
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="row">
';
            $value = $context->find('fstatus1');
            $buffer .= $this->section6d42ff50bc2d05876db224bb7a43c608($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('fstatus2');
            $buffer .= $this->section809bc70cccc97fdf2a17cf58e593bcc3($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('fstatus3');
            $buffer .= $this->sectionF4938f4887f7df68a45f2439ad047ac5($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('fstatus4');
            $buffer .= $this->sectionB21453768c9a4344e33486fc4f46b6c7($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="footer-bottom">
';
            $value = $context->find('copyrightfooter');
            $buffer .= $this->sectionA9886fc24541cbe929a87bd184e83d92($context, $indent, $value);
            $buffer .= $indent . '                <div class="footer-content-debugging">
';
            $buffer .= $indent . '                    <div class="container">';
            $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div data-region="footer-container-popover">
';
            $buffer .= $indent . '                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('pix');
            $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </button>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="footer-content-popover container" data-region="footer-content-popover">
';
            $value = $context->findDot('output.has_popover_links');
            $buffer .= $this->sectionA77d76f233a7692a380a3b52797f8a44($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
            $buffer .= $indent . '                    <div class="logininfo">
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('output.login_info'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="tool_usertours-resettourcontainer">
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="footer-section p-3">
';
            $buffer .= $indent . '                    <div>';
            $value = $context->find('str');
            $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
            $buffer .= '</div>
';
            $value = $context->findDot('output.moodle_release');
            $buffer .= $this->sectionA0866227269433fdcf93fad0212f5c86($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('backtotopbtn');
        $buffer .= $this->sectionEf2aef73b602bcd95c0478d1879810e4($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section44cca7cb7eae6e808ea785e5453e43c0($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionA9886fc24541cbe929a87bd184e83d92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p>{{{copyrightfooter}}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('copyrightfooter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE43fae7703392787aa4aff365b1dde01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <footer id="page-footer" class=" footer-popover footer-dark text-light">
        <div id="footer">
            <div class="footer-bottom">
                {{# copyrightfooter}}
                    <p>{{{copyrightfooter}}}</p>
                {{/ copyrightfooter}}
            </div>
        </div>
    </footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <footer id="page-footer" class=" footer-popover footer-dark text-light">
';
                $buffer .= $indent . '        <div id="footer">
';
                $buffer .= $indent . '            <div class="footer-bottom">
';
                $value = $context->find('copyrightfooter');
                $buffer .= $this->sectionA9886fc24541cbe929a87bd184e83d92($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd35e9a3cbf48574b19da6c4e65afc4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="{{footerbgimgclass}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' class="';
                $value = $this->resolveValue($context->find('footerbgimgclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56fda77aef335cd1ef6f8b66f44e4197(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <h2>{{ftitle1}}</h2>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <h2>';
                $value = $this->resolveValue($context->find('ftitle1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13fcd8c8f6059d16807385f83340a23b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <div class="footer-logo">
';
                $buffer .= $indent . '                                                    <a href="#"><img src="';
                $value = $this->resolveValue($context->find('footerlogourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '                                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58104c657de60c789bf2bee556bddb95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#footerlogourl}}
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                </div>
                                            {{/footerlogourl}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('footerlogourl');
                $buffer .= $this->section13fcd8c8f6059d16807385f83340a23b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d2571890e2067eebb40ba7a3d453c2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{{footnote}}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d42ff50bc2d05876db224bb7a43c608(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="infoarea">
                                        {{#ftitle1}}
                                            <h2>{{ftitle1}}</h2>
                                        {{/ftitle1}}
                                        {{#footlogostatus}}
                                            {{#footerlogourl}}
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                </div>
                                            {{/footerlogourl}}
                                        {{/footlogostatus}}
                                        {{#footnote}}
                                            {{{footnote}}}
                                        {{/footnote}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="infoarea">
';
                $value = $context->find('ftitle1');
                $buffer .= $this->section56fda77aef335cd1ef6f8b66f44e4197($context, $indent, $value);
                $value = $context->find('footlogostatus');
                $buffer .= $this->section58104c657de60c789bf2bee556bddb95($context, $indent, $value);
                $value = $context->find('footnote');
                $buffer .= $this->section1d2571890e2067eebb40ba7a3d453c2d($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2635fcfd50814dcbf63710f98ef480ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <h2>{{ftitle2}}</h2>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <h2>';
                $value = $this->resolveValue($context->find('ftitle2'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f83729d042a243a484b3d9ab251b4e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <ul>
                                                {{{infolink}}}
                                            </ul>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <ul>
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section809bc70cccc97fdf2a17cf58e593bcc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="foot-links">
                                        {{#ftitle2}}
                                            <h2>{{ftitle2}}</h2>
                                        {{/ftitle2}}
                                        {{# infolink}}
                                            <ul>
                                                {{{infolink}}}
                                            </ul>
                                        {{/ infolink}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="foot-links">
';
                $value = $context->find('ftitle2');
                $buffer .= $this->section2635fcfd50814dcbf63710f98ef480ff($context, $indent, $value);
                $value = $context->find('infolink');
                $buffer .= $this->section9f83729d042a243a484b3d9ab251b4e9($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91e1f8220c8cc3c338dbc391eb184470(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <h2>{{ftitle3}}</h2>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <h2>';
                $value = $this->resolveValue($context->find('ftitle3'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93c8c97118e104607f8551afe1ee6672(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <p>{{address}}</p>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbf2fa2e77055a3ecf3e98e73ec89329(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <p><i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF59da8cb1a31563e7af1089508c7c697(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <p><i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4938f4887f7df68a45f2439ad047ac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="contact-info">
                                        {{#ftitle3}}
                                            <h2>{{ftitle3}}</h2>
                                        {{/ftitle3}}
                                        {{# address}}
                                            <p>{{address}}</p>
                                        {{/ address}}
                                        {{# phoneno}}
                                            <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                        {{/ phoneno}}
                                        {{# emailid}}
                                            <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                        {{/ emailid}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="contact-info">
';
                $value = $context->find('ftitle3');
                $buffer .= $this->section91e1f8220c8cc3c338dbc391eb184470($context, $indent, $value);
                $value = $context->find('address');
                $buffer .= $this->section93c8c97118e104607f8551afe1ee6672($context, $indent, $value);
                $value = $context->find('phoneno');
                $buffer .= $this->sectionBbf2fa2e77055a3ecf3e98e73ec89329($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->sectionF59da8cb1a31563e7af1089508c7c697($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb55a6f6fbc1930faf4c7cb2a4a57678(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <h2>{{ftitle4}}</h2>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <h2>';
                $value = $this->resolveValue($context->find('ftitle4'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58f23cd502560fffd233f138b479e5cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-';
                $value = $this->resolveValue($context->find('sno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('surl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" style="background-color: ';
                $value = $this->resolveValue($context->find('siconcolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                            <span class="media-icon">
';
                $buffer .= $indent . '                                                                <i class="fa fa-';
                $value = $this->resolveValue($context->find('sicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                                            </span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8879a2e44db6d40f50079f5e6b73d128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('sicon');
                $buffer .= $this->section58f23cd502560fffd233f138b479e5cf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3322a046f630b90dd68b41c302e95716(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{# socialstatus}}
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            {{/ socialstatus}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('socialstatus');
                $buffer .= $this->section8879a2e44db6d40f50079f5e6b73d128($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB21453768c9a4344e33486fc4f46b6c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="social-media">
                                        {{#ftitle4}}
                                            <h2>{{ftitle4}}</h2>
                                        {{/ftitle4}}
                                        <ul>
                                        {{#socialmedia}}
                                            {{# socialstatus}}
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            {{/ socialstatus}}
                                        {{/socialmedia}}
                                        </ul>
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="social-media">
';
                $value = $context->find('ftitle4');
                $buffer .= $this->sectionAb55a6f6fbc1930faf4c7cb2a4a57678($context, $indent, $value);
                $buffer .= $indent . '                                        <ul>
';
                $value = $context->find('socialmedia');
                $buffer .= $this->section3322a046f630b90dd68b41c302e95716($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section994a7e63e8d45c443e88ccc05258dcbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div>{{{ output.page_doc_link }}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFff03307595ff5a26ada0867d0a8a2c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div>{{{ output.services_support_link }}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section711860ca1e1e62ec4a4bd2d18268bf6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div>{{{ output.supportemail }}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA77d76f233a7692a380a3b52797f8a44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-section p-3 border-bottom">
                        {{# output.page_doc_link }}
                            <div>{{{ output.page_doc_link }}}</div>
                        {{/ output.page_doc_link }}

                        {{# output.services_support_link }}
                            <div>{{{ output.services_support_link }}}</div>
                        {{/ output.services_support_link }}

                        {{# output.supportemail }}
                            <div>{{{ output.supportemail }}}</div>
                        {{/ output.supportemail }}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section994a7e63e8d45c443e88ccc05258dcbd($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->sectionFff03307595ff5a26ada0867d0a8a2c4($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section711860ca1e1e62ec4a4bd2d18268bf6c($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0866227269433fdcf93fad0212f5c86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>
                            {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf2aef73b602bcd95c0478d1879810e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44cca7cb7eae6e808ea785e5453e43c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
