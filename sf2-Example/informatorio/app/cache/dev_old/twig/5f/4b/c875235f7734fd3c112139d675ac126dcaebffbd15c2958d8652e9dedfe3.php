<?php

/* tobeincluded.html.twig */
class __TwigTemplate_5f4bc875235f7734fd3c112139d675ac126dcaebffbd15c2958d8652e9dedfe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <h1> Para Incluir</h1>
    </head>
    <body>
        
        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "tobeincluded.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 6,  48 => 5,  42 => 12,  40 => 11,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
