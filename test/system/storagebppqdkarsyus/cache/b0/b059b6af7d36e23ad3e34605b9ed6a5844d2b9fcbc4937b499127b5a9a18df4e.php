<?php

/* extension/payment/sbrf_online.twig */
class __TwigTemplate_eeef1bc7009bbdce46da449ab21c38ee76cbdb4a816c9a00e3d802316b10d88a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
    
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-sbrf_online\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
        <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a></div>
      <h1><img src=\"view/image/payment/sbrf.png\" width=\"26\" height=\"25\"> ";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 12
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 19
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <form action=\"";
        // line 25
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-sbrf_online\" class=\"form-horizontal\">
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_bank";
            // line 28
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_bank"]) ? $context["entry_bank"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <span class=\"help-block\">";
            // line 30
            echo (isset($context["help_bank"]) ? $context["help_bank"] : null);
            echo "</span>
              <div class=\"input-group\">
                ";
            // line 32
            $context["language_image"] = sprintf("language/%1\$s/%1\$s.png", $this->getAttribute($context["language"], "code", array()));
            // line 33
            echo "                <span class=\"input-group-addon\"><img src=\"";
            echo (isset($context["language_image"]) ? $context["language_image"] : null);
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                <textarea name=\"payment_sbrf_online_bank[";
            // line 34
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" rows=\"10\"
                          id=\"input-payment_sbrf_online_bank";
            // line 35
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\"
                          >";
            // line 36
            echo (($this->getAttribute((isset($context["payment_sbrf_online_bank"]) ? $context["payment_sbrf_online_bank"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) ? ($this->getAttribute((isset($context["payment_sbrf_online_bank"]) ? $context["payment_sbrf_online_bank"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : ((isset($context["text_bank_default"]) ? $context["text_bank_default"] : null)));
            echo "</textarea>
              </div>
              ";
            // line 38
            if ((isset($context["error_bank"]) ? $context["error_bank"] : null)) {
                // line 39
                echo "              <div class=\"text-danger\">";
                echo (isset($context["error_bank"]) ? $context["error_bank"] : null);
                echo "</div>
              ";
            }
            // line 41
            echo "            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_page_success";
            // line 46
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_page_success"]) ? $context["entry_page_success"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                ";
            // line 49
            $context["language_image"] = sprintf("language/%1\$s/%1\$s.png", $this->getAttribute($context["language"], "code", array()));
            // line 50
            echo "                <span class=\"input-group-addon\"><img src=\"";
            echo (isset($context["language_image"]) ? $context["language_image"] : null);
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                <textarea name=\"payment_sbrf_online_page_success[";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" rows=\"10\"
                          id=\"input-payment_sbrf_online_page_success";
            // line 52
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\"
                          >";
            // line 53
            echo (($this->getAttribute((isset($context["payment_sbrf_online_page_success"]) ? $context["payment_sbrf_online_page_success"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) ? ($this->getAttribute((isset($context["payment_sbrf_online_page_success"]) ? $context["payment_sbrf_online_page_success"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : ((isset($context["text_page_success_default"]) ? $context["text_page_success_default"] : null)));
            echo "</textarea>
              </div>
              <span class=\"help-block\">";
            // line 55
            echo (isset($context["help_page_success"]) ? $context["help_page_success"] : null);
            echo "</span>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_title";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                ";
            // line 64
            $context["language_image"] = sprintf("language/%1\$s/%1\$s.png", $this->getAttribute($context["language"], "code", array()));
            // line 65
            echo "                <span class=\"input-group-addon\"><img src=\"";
            echo (isset($context["language_image"]) ? $context["language_image"] : null);
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                <input type=\"text\" name=\"payment_sbrf_online_langdata[";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][title]\"
                     value=\"";
            // line 67
            echo (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["payment_sbrf_online_langdata"]) ? $context["payment_sbrf_online_langdata"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array()))) ? ($this->getAttribute($this->getAttribute((isset($context["payment_sbrf_online_langdata"]) ? $context["payment_sbrf_online_langdata"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : ((isset($context["title_default"]) ? $context["title_default"] : null)));
            echo "\"
                     placeholder=\"";
            // line 68
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" id=\"input-payment_sbrf_online_title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 74
            echo "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_description";
            // line 75
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                ";
            // line 78
            $context["language_image"] = sprintf("language/%1\$s/%1\$s.png", $this->getAttribute($context["language"], "code", array()));
            // line 79
            echo "                <span class=\"input-group-addon\"><img src=\"";
            echo (isset($context["language_image"]) ? $context["language_image"] : null);
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                <textarea name=\"payment_sbrf_online_langdata[";
            // line 80
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\"
                          id=\"input-payment_sbrf_online_description";
            // line 81
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" rows=\"10\" class=\"form-control\"
                          >";
            // line 82
            echo (($this->getAttribute($this->getAttribute((isset($context["payment_sbrf_online_langdata"]) ? $context["payment_sbrf_online_langdata"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "description", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["payment_sbrf_online_langdata"]) ? $context["payment_sbrf_online_langdata"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
              </div>
              <span class=\"help-block\">";
            // line 84
            echo (isset($context["help_description"]) ? $context["help_description"] : null);
            echo "</span>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_icon\">";
        // line 89
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      <label class=\"btn btn-success";
        // line 92
        echo (((isset($context["payment_sbrf_online_icon"]) ? $context["payment_sbrf_online_icon"] : null)) ? (" active") : (""));
        echo "\"><input type=\"radio\" name=\"payment_sbrf_online_icon\" value=\"1\"";
        echo (((isset($context["payment_sbrf_online_icon"]) ? $context["payment_sbrf_online_icon"] : null)) ? (" checked=\"checked\"") : (""));
        echo " /> ";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</label>
                      <label class=\"btn btn-danger";
        // line 93
        echo (( !(isset($context["payment_sbrf_online_icon"]) ? $context["payment_sbrf_online_icon"] : null)) ? (" active") : (""));
        echo "\"><input type=\"radio\" name=\"payment_sbrf_online_icon\" value=\"0\"";
        echo (( !(isset($context["payment_sbrf_online_icon"]) ? $context["payment_sbrf_online_icon"] : null)) ? (" checked=\"checked\"") : (""));
        echo " /> ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</label>
                  </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_minimal_order\">";
        // line 98
        echo (isset($context["entry_minimal_order"]) ? $context["entry_minimal_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_sbrf_online_minimal_order\" value=\"";
        // line 100
        echo (isset($context["payment_sbrf_online_minimal_order"]) ? $context["payment_sbrf_online_minimal_order"] : null);
        echo "\"
                     placeholder=\"";
        // line 101
        echo (isset($context["entry_minimal_order"]) ? $context["entry_minimal_order"] : null);
        echo "\" id=\"input-payment_sbrf_online_minimal_order\" class=\"form-control\" />
              <span class=\"help-block\">";
        // line 102
        echo (isset($context["help_minimal_order"]) ? $context["help_minimal_order"] : null);
        echo "</span>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_maximal_order\">";
        // line 106
        echo (isset($context["entry_maximal_order"]) ? $context["entry_maximal_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_sbrf_online_maximal_order\" value=\"";
        // line 108
        echo (isset($context["payment_sbrf_online_maximal_order"]) ? $context["payment_sbrf_online_maximal_order"] : null);
        echo "\"
                     placeholder=\"";
        // line 109
        echo (isset($context["entry_maximal_order"]) ? $context["entry_maximal_order"] : null);
        echo "\" id=\"input-payment_sbrf_online_maximal_order\" class=\"form-control\" />
              <span class=\"help-block\">";
        // line 110
        echo (isset($context["help_maximal_order"]) ? $context["help_maximal_order"] : null);
        echo "</span>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_order_status_id\">";
        // line 114
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_sbrf_online_order_status_id\" id=\"input-payment_sbrf_online_order_status_id\" class=\"form-control\">
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            echo " 
                ";
            // line 118
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_sbrf_online_order_status_id"]) ? $context["payment_sbrf_online_order_status_id"] : null))) {
                echo " 
                <option value=\"";
                // line 119
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            } else {
                // line 120
                echo " 
                <option value=\"";
                // line 121
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            }
            // line 122
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_geo_zone_id\">";
        // line 128
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_sbrf_online_geo_zone_id\" id=\"input-payment_sbrf_online_geo_zone_id\" class=\"form-control\">
                <option value=\"0\">";
        // line 131
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            echo " 
                ";
            // line 133
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_sbrf_online_geo_zone_id"]) ? $context["payment_sbrf_online_geo_zone_id"] : null))) {
                echo " 
                <option value=\"";
                // line 134
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 135
                echo " 
                <option value=\"";
                // line 136
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 137
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_status\">";
        // line 143
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      <label class=\"btn btn-success";
        // line 146
        echo (((isset($context["payment_sbrf_online_status"]) ? $context["payment_sbrf_online_status"] : null)) ? (" active") : (""));
        echo "\"><input type=\"radio\" name=\"payment_sbrf_online_status\" value=\"1\"";
        echo (((isset($context["payment_sbrf_online_status"]) ? $context["payment_sbrf_online_status"] : null)) ? (" checked=\"checked\"") : (""));
        echo " /> ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</label>
                      <label class=\"btn btn-danger";
        // line 147
        echo (( !(isset($context["payment_sbrf_online_status"]) ? $context["payment_sbrf_online_status"] : null)) ? (" active") : (""));
        echo "\"><input type=\"radio\" name=\"payment_sbrf_online_status\" value=\"0\"";
        echo (( !(isset($context["payment_sbrf_online_status"]) ? $context["payment_sbrf_online_status"] : null)) ? (" checked=\"checked\"") : (""));
        echo " /> ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</label>
                  </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment_sbrf_online_sort_order\">";
        // line 152
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_sbrf_online_sort_order\" value=\"";
        // line 154
        echo (isset($context["payment_sbrf_online_sort_order"]) ? $context["payment_sbrf_online_sort_order"] : null);
        echo "\"
                     placeholder=\"";
        // line 155
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-payment_sbrf_online_sort_order\" class=\"form-control\" />
            </div>
          </div>
        </form>
        <div style=\"padding: 15px 15px; border:1px solid #ccc; margin-top: 15px; box-shadow:0 0px 5px rgba(0,0,0,0.1);\">";
        // line 159
        echo (isset($context["text_copyright"]) ? $context["text_copyright"] : null);
        echo "</div>
      </div><!-- </div class=\"panel-body\"> -->
    </div><!-- </div class=\"panel panel-default\"> -->
  </div><!-- </div class=\"container-fluid\"> -->
</div><!-- </div id=\"content\"> -->
";
        // line 164
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/sbrf_online.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 164,  497 => 159,  490 => 155,  486 => 154,  481 => 152,  469 => 147,  461 => 146,  455 => 143,  448 => 138,  441 => 137,  434 => 136,  431 => 135,  424 => 134,  420 => 133,  414 => 132,  410 => 131,  404 => 128,  397 => 123,  390 => 122,  383 => 121,  380 => 120,  373 => 119,  369 => 118,  363 => 117,  357 => 114,  350 => 110,  346 => 109,  342 => 108,  337 => 106,  330 => 102,  326 => 101,  322 => 100,  317 => 98,  305 => 93,  297 => 92,  291 => 89,  288 => 88,  278 => 84,  273 => 82,  269 => 81,  265 => 80,  258 => 79,  256 => 78,  248 => 75,  245 => 74,  240 => 73,  227 => 68,  223 => 67,  219 => 66,  212 => 65,  210 => 64,  202 => 61,  194 => 59,  184 => 55,  179 => 53,  173 => 52,  169 => 51,  162 => 50,  160 => 49,  152 => 46,  149 => 45,  144 => 44,  136 => 41,  130 => 39,  128 => 38,  123 => 36,  117 => 35,  113 => 34,  106 => 33,  104 => 32,  99 => 30,  92 => 28,  85 => 26,  81 => 25,  77 => 23,  70 => 19,  66 => 18,  60 => 14,  50 => 12,  44 => 11,  39 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }} */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*     */
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-sbrf_online" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/*         <a href="{{ cancel }}" class="btn btn-default"><i class="fa fa-reply"></i> {{ button_cancel }}</a></div>*/
/*       <h1><img src="view/image/payment/sbrf.png" width="26" height="25"> {{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %} */
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if (error_warning) %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-sbrf_online" class="form-horizontal">*/
/*           {% for language in languages %} */
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_bank{{ language.language_id }}">{{ entry_bank }}</label>*/
/*             <div class="col-sm-10">*/
/*               <span class="help-block">{{ help_bank }}</span>*/
/*               <div class="input-group">*/
/*                 {% set language_image = 'language/%1$s/%1$s.png' | format(language.code) %}*/
/*                 <span class="input-group-addon"><img src="{{ language_image }}" title="{{ language.name }}" /></span>*/
/*                 <textarea name="payment_sbrf_online_bank[{{ language.language_id }}]" rows="10"*/
/*                           id="input-payment_sbrf_online_bank{{ language.language_id }}" class="form-control" data-toggle="summernote" data-lang="{{ summernote }}"*/
/*                           >{{ payment_sbrf_online_bank[language.language_id] is defined ? payment_sbrf_online_bank[language.language_id] : text_bank_default }}</textarea>*/
/*               </div>*/
/*               {% if (error_bank) %}*/
/*               <div class="text-danger">{{ error_bank }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %}*/
/*           {% for language in languages %}*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_page_success{{ language.language_id }}">{{ entry_page_success }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group">*/
/*                 {% set language_image = 'language/%1$s/%1$s.png' | format(language.code) %}*/
/*                 <span class="input-group-addon"><img src="{{ language_image }}" title="{{ language.name }}" /></span>*/
/*                 <textarea name="payment_sbrf_online_page_success[{{ language.language_id }}]" rows="10"*/
/*                           id="input-payment_sbrf_online_page_success{{ language.language_id }}" class="form-control" data-toggle="summernote" data-lang="{{ summernote }}"*/
/*                           >{{ payment_sbrf_online_page_success[language.language_id] is defined ? payment_sbrf_online_page_success[language.language_id] : text_page_success_default }}</textarea>*/
/*               </div>*/
/*               <span class="help-block">{{ help_page_success }}</span>*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %}*/
/*           {% for language in languages %} */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_title{{ language.language_id }}">{{ entry_title }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group">*/
/*                 {% set language_image = 'language/%1$s/%1$s.png' | format(language.code) %}*/
/*                 <span class="input-group-addon"><img src="{{ language_image }}" title="{{ language.name }}" /></span>*/
/*                 <input type="text" name="payment_sbrf_online_langdata[{{ language.language_id }}][title]"*/
/*                      value="{{ payment_sbrf_online_langdata[language.language_id].title is not empty ? payment_sbrf_online_langdata[language.language_id].title : title_default }}"*/
/*                      placeholder="{{ entry_title }}" id="input-payment_sbrf_online_title{{ language.language_id }}" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %}*/
/*           {% for language in languages %}*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_description{{ language.language_id }}">{{ entry_description }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group">*/
/*                 {% set language_image = 'language/%1$s/%1$s.png' | format(language.code) %}*/
/*                 <span class="input-group-addon"><img src="{{ language_image }}" title="{{ language.name }}" /></span>*/
/*                 <textarea name="payment_sbrf_online_langdata[{{ language.language_id }}][description]"*/
/*                           id="input-payment_sbrf_online_description{{ language.language_id }}" rows="10" class="form-control"*/
/*                           >{{ payment_sbrf_online_langdata[language.language_id].description is defined ? payment_sbrf_online_langdata[language.language_id].description : '' }}</textarea>*/
/*               </div>*/
/*               <span class="help-block">{{ help_description }}</span>*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %}*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_icon">{{ entry_icon }}</label>*/
/*             <div class="col-sm-10">*/
/*                   <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       <label class="btn btn-success{{ payment_sbrf_online_icon ? ' active' : '' }}"><input type="radio" name="payment_sbrf_online_icon" value="1"{{ payment_sbrf_online_icon ? ' checked="checked"' : '' }} /> {{ text_yes }}</label>*/
/*                       <label class="btn btn-danger{{ not payment_sbrf_online_icon ? ' active' : '' }}"><input type="radio" name="payment_sbrf_online_icon" value="0"{{ not payment_sbrf_online_icon ? ' checked="checked"' : '' }} /> {{ text_no }}</label>*/
/*                   </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_minimal_order">{{ entry_minimal_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_sbrf_online_minimal_order" value="{{ payment_sbrf_online_minimal_order }}"*/
/*                      placeholder="{{ entry_minimal_order }}" id="input-payment_sbrf_online_minimal_order" class="form-control" />*/
/*               <span class="help-block">{{ help_minimal_order }}</span>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_maximal_order">{{ entry_maximal_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_sbrf_online_maximal_order" value="{{ payment_sbrf_online_maximal_order }}"*/
/*                      placeholder="{{ entry_maximal_order }}" id="input-payment_sbrf_online_maximal_order" class="form-control" />*/
/*               <span class="help-block">{{ help_maximal_order }}</span>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_order_status_id">{{ entry_order_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_sbrf_online_order_status_id" id="input-payment_sbrf_online_order_status_id" class="form-control">*/
/*                 {% for order_status in order_statuses %} */
/*                 {% if (order_status.order_status_id == payment_sbrf_online_order_status_id) %} */
/*                 <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                 {% else %} */
/*                 <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endif %} */
/*                 {% endfor %} */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_geo_zone_id">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_sbrf_online_geo_zone_id" id="input-payment_sbrf_online_geo_zone_id" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %} */
/*                 {% if (geo_zone.geo_zone_id == payment_sbrf_online_geo_zone_id) %} */
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %} */
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %} */
/*                 {% endfor %} */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*                   <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       <label class="btn btn-success{{ payment_sbrf_online_status ? ' active' : '' }}"><input type="radio" name="payment_sbrf_online_status" value="1"{{ payment_sbrf_online_status ? ' checked="checked"' : '' }} /> {{ text_enabled }}</label>*/
/*                       <label class="btn btn-danger{{ not payment_sbrf_online_status ? ' active' : '' }}"><input type="radio" name="payment_sbrf_online_status" value="0"{{ not payment_sbrf_online_status ? ' checked="checked"' : '' }} /> {{ text_disabled }}</label>*/
/*                   </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-payment_sbrf_online_sort_order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_sbrf_online_sort_order" value="{{ payment_sbrf_online_sort_order }}"*/
/*                      placeholder="{{ entry_sort_order }}" id="input-payment_sbrf_online_sort_order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*         <div style="padding: 15px 15px; border:1px solid #ccc; margin-top: 15px; box-shadow:0 0px 5px rgba(0,0,0,0.1);">{{ text_copyright }}</div>*/
/*       </div><!-- </div class="panel-body"> -->*/
/*     </div><!-- </div class="panel panel-default"> -->*/
/*   </div><!-- </div class="container-fluid"> -->*/
/* </div><!-- </div id="content"> -->*/
/* {{ footer }}*/
