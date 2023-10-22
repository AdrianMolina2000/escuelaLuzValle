<?php

class __Mustache_de63c52ad967205d6c62861ef7285337 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('status');
        $buffer .= $this->sectionA70fd581e335d94b3d9468aabf5dae8c($context, $indent, $value);

        return $buffer;
    }

    private function sectionA805abbdef6574f70054a9b693f6e891(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
            <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
';
                $buffer .= $indent . '            <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d3d75152e13aa546f28d1ce8c8b53a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <img src="{{{slideimg}}}" class="slide-image">
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <img src="';
                $value = $this->resolveValue($context->find('slideimg'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="slide-image">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0286a33ee6f3353a8487926f855016f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h1 data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDee1a4f260ffc4f626bc42b2873fbd67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('desc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF64e4f3f1455d3776d656e8a8b8e64a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->find('btnlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="';
                $value = $this->resolveValue($context->find('btntarget'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class=\'btn btn-primary ';
                $value = $this->resolveValue($context->find('contentAclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' data-animation=\'animated ';
                $value = $this->resolveValue($context->find('contentAnimation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'>
';
                $buffer .= $indent . '                                                        ';
                $value = $this->resolveValue($context->find('btntxt'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92635630184960980a6098a9da51509f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
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
                
                $buffer .= $indent . '                                    <div class="slide-text content_overlayer ';
                $value = $this->resolveValue($context->find('contentClass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="width:';
                $value = $this->resolveValue($context->find('contentwidth'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                                        <div class="heading-content">
';
                $value = $context->find('caption');
                $buffer .= $this->section0286a33ee6f3353a8487926f855016f7($context, $indent, $value);
                $buffer .= $indent . '                                            <br>
';
                $value = $context->find('desc');
                $buffer .= $this->sectionDee1a4f260ffc4f626bc42b2873fbd67($context, $indent, $value);
                $buffer .= $indent . '                                            <div class="link-button">
';
                $value = $context->find('btntxt');
                $buffer .= $this->sectionF64e4f3f1455d3776d656e8a8b8e64a0($context, $indent, $value);
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe483954c95834fd2cfbec27e4247c1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="homecarousel-slide-item carousel-item">
                            <div class="slide-item slide-content {{overlayClass}}">
                                <div class="slide-main-background">
                                    {{#slideimg}}
                                        <img src="{{{slideimg}}}" class="slide-image">
                                    {{/slideimg}}
                                </div>
                                {{! Slide content }}
                                {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                {{/slidecontentstatus}}
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="homecarousel-slide-item carousel-item">
';
                $buffer .= $indent . '                            <div class="slide-item slide-content ';
                $value = $this->resolveValue($context->find('overlayClass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="slide-main-background">
';
                $value = $context->find('slideimg');
                $buffer .= $this->section6d3d75152e13aa546f28d1ce8c8b53a6($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $value = $context->find('slidecontentstatus');
                $buffer .= $this->section92635630184960980a6098a9da51509f($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa9db23e9570abe903764bb24ba2d1ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#slideimg}}
                        <div class="homecarousel-slide-item carousel-item">
                            <div class="slide-item slide-content {{overlayClass}}">
                                <div class="slide-main-background">
                                    {{#slideimg}}
                                        <img src="{{{slideimg}}}" class="slide-image">
                                    {{/slideimg}}
                                </div>
                                {{! Slide content }}
                                {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                {{/slidecontentstatus}}
                            </div>
                        </div>
                    {{/slideimg}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slideimg');
                $buffer .= $this->sectionFe483954c95834fd2cfbec27e4247c1b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38a70a879c0b50404d0451cc8154f6c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#slidestatus}}
                    {{#slideimg}}
                        <div class="homecarousel-slide-item carousel-item">
                            <div class="slide-item slide-content {{overlayClass}}">
                                <div class="slide-main-background">
                                    {{#slideimg}}
                                        <img src="{{{slideimg}}}" class="slide-image">
                                    {{/slideimg}}
                                </div>
                                {{! Slide content }}
                                {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                {{/slidecontentstatus}}
                            </div>
                        </div>
                    {{/slideimg}}
                {{/slidestatus}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slidestatus');
                $buffer .= $this->sectionEa9db23e9570abe903764bb24ba2d1ec($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA70fd581e335d94b3d9468aabf5dae8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="homepage-carousel">
        {{#numofslide}}
            <a href="#" class="prevBtn carousel-control left"> <span aria-hidden="true"></span> </a>
            <a href="#" class="nextBtn carousel-control right"> <span aria-hidden="true"></span> </a>
        {{/numofslide}}
        <div id="homepage-carousel">
            {{#slides}}
                {{#slidestatus}}
                    {{#slideimg}}
                        <div class="homecarousel-slide-item carousel-item">
                            <div class="slide-item slide-content {{overlayClass}}">
                                <div class="slide-main-background">
                                    {{#slideimg}}
                                        <img src="{{{slideimg}}}" class="slide-image">
                                    {{/slideimg}}
                                </div>
                                {{! Slide content }}
                                {{#slidecontentstatus}}
                                    <div class="slide-text content_overlayer {{contentClass}}" style="width:{{contentwidth}};">
                                        <div class="heading-content">
                                            {{#caption}}
                                                <h1 data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{caption}}}</h1>
                                            {{/caption}}
                                            <br>
                                            {{#desc}}
                                                <p data-animation=\'animated {{contentAnimation}}\' class="{{contentAclass}}">{{{desc}}}</p>
                                            {{/desc}}
                                            <div class="link-button">
                                                {{#btntxt}}
                                                    <a href="{{{btnlink}}}" target="{{btntarget}}" class=\'btn btn-primary {{contentAclass}}\' data-animation=\'animated {{contentAnimation}}\'>
                                                        {{btntxt}}
                                                    </a>
                                                {{/btntxt}}
                                            </div>
                                        </div>
                                    </div>
                                {{/slidecontentstatus}}
                            </div>
                        </div>
                    {{/slideimg}}
                {{/slidestatus}}
            {{/slides}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="homepage-carousel">
';
                $value = $context->find('numofslide');
                $buffer .= $this->sectionA805abbdef6574f70054a9b693f6e891($context, $indent, $value);
                $buffer .= $indent . '        <div id="homepage-carousel">
';
                $value = $context->find('slides');
                $buffer .= $this->section38a70a879c0b50404d0451cc8154f6c8($context, $indent, $value);
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
