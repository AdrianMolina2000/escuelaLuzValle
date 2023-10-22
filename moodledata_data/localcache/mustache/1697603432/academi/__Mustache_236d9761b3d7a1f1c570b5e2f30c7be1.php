<?php

class __Mustache_236d9761b3d7a1f1c570b5e2f30c7be1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('availablecourses');
        $buffer .= $this->section9f3a067fdff47a64ab1e2bf1ceca82b7($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('promatedcourse');
        $buffer .= $this->section7ba2e0d0a1cc6e88dd4737789a49d082($context, $indent, $value);

        return $buffer;
    }

    private function section71352ebdd71fd6079889fd23b9fba583(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 120, {{{summary}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 120, ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ddef225e903f2b908db7f030ac9d831(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="desc-block">
                                            <p>{{#shortentext}} 120, {{{summary}}} {{/shortentext}}</p>
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="desc-block">
';
                $buffer .= $indent . '                                            <p>';
                $value = $context->find('shortentext');
                $buffer .= $this->section71352ebdd71fd6079889fd23b9fba583($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD578286788e05ea9b4cccca023bbb1aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="available-content">
                                <div class="available-img">
                                    <a href={{link}}>
                                        <img src="{{imgurl}}" width="249" height="200" alt={{name}}>
                                    </a>
                                </div>
                                <div class="available-info">
                                    <div class="title-block">
                                        <h6><a href={{link}}>{{name}}</a></h6>
                                    </div>
                                    {{#summary}}
                                        <div class="desc-block">
                                            <p>{{#shortentext}} 120, {{{summary}}} {{/shortentext}}</p>
                                        </div>
                                    {{/summary}}
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="available-content">
';
                $buffer .= $indent . '                                <div class="available-img">
';
                $buffer .= $indent . '                                    <a href=';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>
';
                $buffer .= $indent . '                                        <img src="';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="249" height="200" alt=';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="available-info">
';
                $buffer .= $indent . '                                    <div class="title-block">
';
                $buffer .= $indent . '                                        <h6><a href=';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h6>
';
                $buffer .= $indent . '                                    </div>
';
                $value = $context->find('summary');
                $buffer .= $this->section1ddef225e903f2b908db7f030ac9d831($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f3a067fdff47a64ab1e2bf1ceca82b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="available-courses" id="available-courses">
        <div class="available-block">
            <div class="container">
                <div class="row">
                    <div class="course-slider col-md-12" data-crow="{{totalavacount}}">
                        {{#courses}}
                            <div class="available-content">
                                <div class="available-img">
                                    <a href={{link}}>
                                        <img src="{{imgurl}}" width="249" height="200" alt={{name}}>
                                    </a>
                                </div>
                                <div class="available-info">
                                    <div class="title-block">
                                        <h6><a href={{link}}>{{name}}</a></h6>
                                    </div>
                                    {{#summary}}
                                        <div class="desc-block">
                                            <p>{{#shortentext}} 120, {{{summary}}} {{/shortentext}}</p>
                                        </div>
                                    {{/summary}}
                                </div>
                            </div>
                        {{/courses}}
                    </div>
                </div>
            </div>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="available-courses" id="available-courses">
';
                $buffer .= $indent . '        <div class="available-block">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                    <div class="course-slider col-md-12" data-crow="';
                $value = $this->resolveValue($context->find('totalavacount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('courses');
                $buffer .= $this->sectionD578286788e05ea9b4cccca023bbb1aa($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c5c4b2a0d25a8f147003830e67f7dd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <h2><b>{{promotedtitle}}</b></h2>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <h2><b>';
                $value = $this->resolveValue($context->find('promotedtitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5959e451fa806fb595a21bba7522a072(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p>{{promotedcoursedesc}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('promotedcoursedesc'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section610ac18987a7d356558de3628135eb52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="slider-item">
                            <div class="course-box">
                                <div class="thumb">
                                    <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                </div>
                                <div class="info">
                                    <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                </div>
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="slider-item">
';
                $buffer .= $indent . '                            <div class="course-box">
';
                $buffer .= $indent . '                                <div class="thumb">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="135" height="135" alt=""></a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="info">
';
                $buffer .= $indent . '                                    <h5><a href="';
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </a></h5>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38c1eb2bb737d7a9064adc8013f5a81b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#.}}
                        <div class="slider-item">
                            <div class="course-box">
                                <div class="thumb">
                                    <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                </div>
                                <div class="info">
                                    <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                </div>
                            </div>
                        </div>
                    {{/.}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->last('.');
                $buffer .= $this->section610ac18987a7d356558de3628135eb52($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ba2e0d0a1cc6e88dd4737789a49d082(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="promoted-courses" id="promoted-courses">
        <div class="container">
            <div class="titlebar">
                {{#promotedtitle}}
                    <h2><b>{{promotedtitle}}</b></h2>
                {{/promotedtitle}}
                {{#promotedcoursedesc}}
                    <p>{{promotedcoursedesc}}</p>
                {{/promotedcoursedesc}}
            </div>
            <div class="promatedcourse-slider" data-crow="{{totalfcourse}}">
                {{#courses}}
                    {{#.}}
                        <div class="slider-item">
                            <div class="course-box">
                                <div class="thumb">
                                    <a href="{{courseurl}}"><img src="{{imgurl}}" width="135" height="135" alt=""></a>
                                </div>
                                <div class="info">
                                    <h5><a href="{{courseurl}}"> {{coursename}} </a></h5>
                                </div>
                            </div>
                        </div>
                    {{/.}}
                {{/courses}}
            </div>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="promoted-courses" id="promoted-courses">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="titlebar">
';
                $value = $context->find('promotedtitle');
                $buffer .= $this->section6c5c4b2a0d25a8f147003830e67f7dd7($context, $indent, $value);
                $value = $context->find('promotedcoursedesc');
                $buffer .= $this->section5959e451fa806fb595a21bba7522a072($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="promatedcourse-slider" data-crow="';
                $value = $this->resolveValue($context->find('totalfcourse'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('courses');
                $buffer .= $this->section38c1eb2bb737d7a9064adc8013f5a81b($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
