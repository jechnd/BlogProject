<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_73459eb3399624fe8069135e93f08e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>
";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 11
            echo "    <div class=\"blogger-notice\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 15
        echo "
    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"blogger\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "subject"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "

        ";
        // line 26
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
