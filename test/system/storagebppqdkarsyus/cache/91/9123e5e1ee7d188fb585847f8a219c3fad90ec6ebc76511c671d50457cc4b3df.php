<?php

/* extension/payment/portmone.twig */
class __TwigTemplate_557fe3740ea67cb0b16ff318befcf910e8d49f0ad22691b02bb99b094a521f47 extends Twig_Template
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
        <button type=\"submit\" form=\"form-portmone\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a></div>
      <h1>";
        // line 8
        echo (isset($context["text_portmone"]) ? $context["text_portmone"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
<div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
          <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-portmone\" class=\"form-horizontal\">
              <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-wrench\"></i> ";
        // line 34
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                  <li><a href=\"#tab-status\" data-toggle=\"tab\"><i class=\"fa fa-info-circle\"></i> ";
        // line 35
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
              </ul>
              <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"tab-general\">
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["h_entry_status"]) ? $context["h_entry_status"] : null);
        echo "\">";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <select name=\"payment_portmone_status\" id=\"input-status\" class=\"form-control\">
                                  ";
        // line 45
        if ((isset($context["payment_portmone_status"]) ? $context["payment_portmone_status"] : null)) {
            // line 46
            echo "                                      <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                      <option value=\"0\">";
            // line 47
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                  ";
        } else {
            // line 49
            echo "                                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                      <option value=\"0\" selected=\"selected\">";
            // line 50
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                  ";
        }
        // line 52
        echo "                              </select>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-name\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 57
        echo (isset($context["h_entry_name"]) ? $context["h_entry_name"] : null);
        echo "\">";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"payment_portmone_name\" value=\"";
        // line 60
        echo (isset($context["payment_portmone_name"]) ? $context["payment_portmone_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["h_entry_name"]) ? $context["h_entry_name"] : null);
        echo "\" id=\"input-portmone-name\" class=\"form-control\" />
                          </div>
                      </div>
                      <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-payee-id\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 65
        echo (isset($context["h_entry_payee_id"]) ? $context["h_entry_payee_id"] : null);
        echo "\">";
        echo (isset($context["entry_payee_id"]) ? $context["entry_payee_id"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"payment_portmone_payee_id\" value=\"";
        // line 68
        echo (isset($context["payment_portmone_payee_id"]) ? $context["payment_portmone_payee_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["h_entry_payee_id"]) ? $context["h_entry_payee_id"] : null);
        echo "\" id=\"input-portmone-payee-id\" class=\"form-control\" />
                              ";
        // line 69
        if ((isset($context["error_payee_id"]) ? $context["error_payee_id"] : null)) {
            // line 70
            echo "                                  <div class=\"text-danger\">";
            echo (isset($context["error_payee_id"]) ? $context["error_payee_id"] : null);
            echo "</div>
                              ";
        }
        // line 72
        echo "                          </div>
                      </div>
                      <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-login\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo (isset($context["h_entry_login"]) ? $context["h_entry_login"] : null);
        echo "\">";
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"payment_portmone_login\" value=\"";
        // line 79
        echo (isset($context["payment_portmone_login"]) ? $context["payment_portmone_login"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["h_entry_login"]) ? $context["h_entry_login"] : null);
        echo "\" id=\"input-portmone-login\" class=\"form-control\" />
                              ";
        // line 80
        if ((isset($context["error_login"]) ? $context["error_login"] : null)) {
            // line 81
            echo "                                  <div class=\"text-danger\">";
            echo (isset($context["error_login"]) ? $context["error_login"] : null);
            echo "</div>
                              ";
        }
        // line 83
        echo "                          </div>
                      </div>
                      <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-pass\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo (isset($context["h_entry_pass"]) ? $context["h_entry_pass"] : null);
        echo "\">";
        echo (isset($context["entry_pass"]) ? $context["entry_pass"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <input type=\"password\" name=\"payment_portmone_pass\" value=\"";
        // line 90
        echo (isset($context["payment_portmone_pass"]) ? $context["payment_portmone_pass"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["h_entry_pass"]) ? $context["h_entry_pass"] : null);
        echo "\" id=\"input-portmone-pass\" class=\"form-control\" />
                              ";
        // line 91
        if ((isset($context["error_pass"]) ? $context["error_pass"] : null)) {
            // line 92
            echo "                                  <div class=\"text-danger\">";
            echo (isset($context["error_pass"]) ? $context["error_pass"] : null);
            echo "</div>
                              ";
        }
        // line 94
        echo "                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-order-status\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 98
        echo (isset($context["h_entry_order_stat"]) ? $context["h_entry_order_stat"] : null);
        echo "\">";
        echo (isset($context["entry_order_stat"]) ? $context["entry_order_stat"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <select name=\"payment_portmone_order_stat_id\" id=\"input-order-status\" class=\"form-control\">
                                  ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 103
            echo "                                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_portmone_order_stat_id"]) ? $context["payment_portmone_order_stat_id"] : null))) {
                // line 104
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            } else {
                // line 106
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            }
            // line 108
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                              </select>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-order-status-failure\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo (isset($context["h_entry_order_stat_fa"]) ? $context["h_entry_order_stat_fa"] : null);
        echo "\">";
        echo (isset($context["entry_order_stat_fa"]) ? $context["entry_order_stat_fa"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <select name=\"payment_portmone_order_stat_fal_id\" id=\"input-order-status-failure\" class=\"form-control\">
                                  ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 119
            echo "                                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_portmone_order_stat_fal_id"]) ? $context["payment_portmone_order_stat_fal_id"] : null))) {
                // line 120
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            } else {
                // line 122
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            }
            // line 124
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                              </select>
                          </div>
                      </div>
                      <div class=\"form-group\" style=\"display: none;\">
                          <label class=\"col-sm-2 control-label\" for=\"input-order-status-failure\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 130
        echo (isset($context["h_entry_order_stat_fa"]) ? $context["h_entry_order_stat_fa"] : null);
        echo "\">";
        echo (isset($context["entry_order_stat_fa"]) ? $context["entry_order_stat_fa"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <select name=\"payment_portmone_order_stat_not_verified_id\" id=\"input-order-status-failure\" class=\"form-control\">
                                  ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 135
            echo "                                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_portmone_order_stat_not_verified_id"]) ? $context["payment_portmone_order_stat_not_verified_id"] : null))) {
                // line 136
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            } else {
                // line 138
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            }
            // line 140
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                              </select>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-order-status\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 146
        echo (isset($context["h_entry_order_stat_preauth"]) ? $context["h_entry_order_stat_preauth"] : null);
        echo "\">";
        echo (isset($context["entry_order_stat_preauth"]) ? $context["entry_order_stat_preauth"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <select name=\"payment_portmone_order_stat_preauth_id\" id=\"input-order-status\" class=\"form-control\">
                                  ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 151
            echo "                                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_portmone_order_stat_preauth_id"]) ? $context["payment_portmone_order_stat_preauth_id"] : null))) {
                // line 152
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            } else {
                // line 154
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                      ";
            }
            // line 156
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                              </select>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 162
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "\">";
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <select name=\"payment_portmone_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                                  <option value=\"0\">";
        // line 166
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                                  ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 168
            echo "                                      ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_portmone_geo_zone_id"]) ? $context["payment_portmone_geo_zone_id"] : null))) {
                // line 169
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                      ";
            } else {
                // line 171
                echo "                                          <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                      ";
            }
            // line 173
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                              </select>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-preauth-flag\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 179
        echo (isset($context["h_entry_preauth_flag"]) ? $context["h_entry_preauth_flag"] : null);
        echo "\">";
        echo (isset($context["entry_preauth_flag"]) ? $context["entry_preauth_flag"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <div class=\"checkbox\">
                                  <label>
                                      ";
        // line 184
        if ((array_key_exists("payment_portmone_entry_preauth_flag", $context) && ((isset($context["payment_portmone_entry_preauth_flag"]) ? $context["payment_portmone_entry_preauth_flag"] : null) == "1"))) {
            // line 185
            echo "                                          <input type=\"checkbox\" name=\"payment_portmone_entry_preauth_flag\" id=\"payment_portmone_entry_preauth_flag\" value=\"1\" checked=\"checked\" />
                                      ";
        } else {
            // line 187
            echo "                                          <input type=\"checkbox\" name=\"payment_portmone_entry_preauth_flag\" id=\"payment_portmone_entry_preauth_flag\" value=\"1\" />
                                      ";
        }
        // line 189
        echo "                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-showlogo\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 195
        echo (isset($context["h_entry_showlogo"]) ? $context["h_entry_showlogo"] : null);
        echo "\">";
        echo (isset($context["entry_showlogo"]) ? $context["entry_showlogo"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <div class=\"checkbox\">
                                  <label>
                                      ";
        // line 200
        if ((array_key_exists("payment_portmone_entry_showlogo", $context) && ((isset($context["payment_portmone_entry_showlogo"]) ? $context["payment_portmone_entry_showlogo"] : null) == "1"))) {
            // line 201
            echo "                                          <input type=\"checkbox\" name=\"payment_portmone_entry_showlogo\" id=\"payment_portmone_entry_showlogo\" value=\"1\" checked=\"checked\" />
                                      ";
        } else {
            // line 203
            echo "                                          <input type=\"checkbox\" name=\"payment_portmone_entry_showlogo\" id=\"payment_portmone_entry_showlogo\" value=\"1\" />
                                      ";
        }
        // line 205
        echo "                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">
                              <span data-toggle=\"tooltip\" title=\"";
        // line 211
        echo (isset($context["h_entry_sort_order"]) ? $context["h_entry_sort_order"] : null);
        echo "\">";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</span>
                          </label>
                          <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"payment_portmone_sort_order\" value=\"";
        // line 214
        echo (isset($context["payment_portmone_sort_order"]) ? $context["payment_portmone_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["h_entry_sort_order"]) ? $context["h_entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                          </div>
                      </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-status\">
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
        // line 220
        echo (isset($context["OP_version"]) ? $context["OP_version"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                              <div>";
        // line 222
        echo (isset($context["entry_OP_version"]) ? $context["entry_OP_version"] : null);
        echo "</div>
                          </div>
                      </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
        // line 226
        echo (isset($context["Plugin_version"]) ? $context["Plugin_version"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                              <div>";
        // line 228
        echo (isset($context["entry_Plugin_version"]) ? $context["entry_Plugin_version"] : null);
        echo "</div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
";
        // line 238
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/portmone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 238,  578 => 228,  573 => 226,  566 => 222,  561 => 220,  550 => 214,  542 => 211,  534 => 205,  530 => 203,  526 => 201,  524 => 200,  514 => 195,  506 => 189,  502 => 187,  498 => 185,  496 => 184,  486 => 179,  479 => 174,  473 => 173,  465 => 171,  457 => 169,  454 => 168,  450 => 167,  446 => 166,  437 => 162,  430 => 157,  424 => 156,  416 => 154,  408 => 152,  405 => 151,  401 => 150,  392 => 146,  385 => 141,  379 => 140,  371 => 138,  363 => 136,  360 => 135,  356 => 134,  347 => 130,  340 => 125,  334 => 124,  326 => 122,  318 => 120,  315 => 119,  311 => 118,  302 => 114,  295 => 109,  289 => 108,  281 => 106,  273 => 104,  270 => 103,  266 => 102,  257 => 98,  251 => 94,  245 => 92,  243 => 91,  237 => 90,  229 => 87,  223 => 83,  217 => 81,  215 => 80,  209 => 79,  201 => 76,  195 => 72,  189 => 70,  187 => 69,  181 => 68,  173 => 65,  163 => 60,  155 => 57,  148 => 52,  143 => 50,  138 => 49,  133 => 47,  128 => 46,  126 => 45,  117 => 41,  108 => 35,  104 => 34,  99 => 32,  93 => 29,  89 => 27,  81 => 23,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-portmone" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i> {{ button_cancel }}</a></div>*/
/*       <h1>{{ text_portmone }}</h1>*/
/*       <ul class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*         <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*           <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-portmone" class="form-horizontal">*/
/*               <ul class="nav nav-tabs">*/
/*                   <li class="active"><a href="#tab-general" data-toggle="tab"><i class="fa fa-wrench"></i> {{ tab_general }}</a></li>*/
/*                   <li><a href="#tab-status" data-toggle="tab"><i class="fa fa-info-circle"></i> {{ tab_order_status }}</a></li>*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                   <div class="tab-pane active" id="tab-general">*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-status">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_status }}">{{ entry_status }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <select name="payment_portmone_status" id="input-status" class="form-control">*/
/*                                   {% if payment_portmone_status %}*/
/*                                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                       <option value="0">{{ text_disabled }}</option>*/
/*                                   {% else %}*/
/*                                       <option value="1">{{ text_enabled }}</option>*/
/*                                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                   {% endif %}*/
/*                               </select>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-name">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_name }}">{{ entry_name }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <input type="text" name="payment_portmone_name" value="{{ payment_portmone_name }}" placeholder="{{ h_entry_name }}" id="input-portmone-name" class="form-control" />*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-payee-id">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_payee_id }}">{{ entry_payee_id }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <input type="text" name="payment_portmone_payee_id" value="{{ payment_portmone_payee_id }}" placeholder="{{ h_entry_payee_id }}" id="input-portmone-payee-id" class="form-control" />*/
/*                               {% if error_payee_id %}*/
/*                                   <div class="text-danger">{{ error_payee_id }}</div>*/
/*                               {% endif %}*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-login">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_login }}">{{ entry_login }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <input type="text" name="payment_portmone_login" value="{{ payment_portmone_login }}" placeholder="{{ h_entry_login }}" id="input-portmone-login" class="form-control" />*/
/*                               {% if error_login %}*/
/*                                   <div class="text-danger">{{ error_login }}</div>*/
/*                               {% endif %}*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-pass">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_pass }}">{{ entry_pass }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <input type="password" name="payment_portmone_pass" value="{{ payment_portmone_pass }}" placeholder="{{ h_entry_pass }}" id="input-portmone-pass" class="form-control" />*/
/*                               {% if error_pass %}*/
/*                                   <div class="text-danger">{{ error_pass }}</div>*/
/*                               {% endif %}*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-order-status">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_order_stat }}">{{ entry_order_stat }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <select name="payment_portmone_order_stat_id" id="input-order-status" class="form-control">*/
/*                                   {% for order_status in order_statuses %}*/
/*                                       {% if order_status.order_status_id == payment_portmone_order_stat_id %}*/
/*                                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                                       {% else %}*/
/*                                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                       {% endif %}*/
/*                                   {% endfor %}*/
/*                               </select>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-order-status-failure">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_order_stat_fa }}">{{ entry_order_stat_fa }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <select name="payment_portmone_order_stat_fal_id" id="input-order-status-failure" class="form-control">*/
/*                                   {% for order_status in order_statuses %}*/
/*                                       {% if order_status.order_status_id == payment_portmone_order_stat_fal_id %}*/
/*                                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                                       {% else %}*/
/*                                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                       {% endif %}*/
/*                                   {% endfor %}*/
/*                               </select>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group" style="display: none;">*/
/*                           <label class="col-sm-2 control-label" for="input-order-status-failure">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_order_stat_fa }}">{{ entry_order_stat_fa }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <select name="payment_portmone_order_stat_not_verified_id" id="input-order-status-failure" class="form-control">*/
/*                                   {% for order_status in order_statuses %}*/
/*                                       {% if order_status.order_status_id == payment_portmone_order_stat_not_verified_id %}*/
/*                                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                                       {% else %}*/
/*                                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                       {% endif %}*/
/*                                   {% endfor %}*/
/*                               </select>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-order-status">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_order_stat_preauth }}">{{ entry_order_stat_preauth }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <select name="payment_portmone_order_stat_preauth_id" id="input-order-status" class="form-control">*/
/*                                   {% for order_status in order_statuses %}*/
/*                                       {% if order_status.order_status_id == payment_portmone_order_stat_preauth_id %}*/
/*                                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                                       {% else %}*/
/*                                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                       {% endif %}*/
/*                                   {% endfor %}*/
/*                               </select>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-geo-zone">*/
/*                               <span data-toggle="tooltip" title="{{ entry_geo_zone }}">{{ entry_geo_zone }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <select name="payment_portmone_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                                   <option value="0">{{ text_all_zones }}</option>*/
/*                                   {% for geo_zone in geo_zones %}*/
/*                                       {% if geo_zone.geo_zone_id == payment_portmone_geo_zone_id %}*/
/*                                           <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                                       {% else %}*/
/*                                           <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                                       {% endif %}*/
/*                                   {% endfor %}*/
/*                               </select>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-preauth-flag">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_preauth_flag }}">{{ entry_preauth_flag }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <div class="checkbox">*/
/*                                   <label>*/
/*                                       {% if payment_portmone_entry_preauth_flag is defined and payment_portmone_entry_preauth_flag=='1' %}*/
/*                                           <input type="checkbox" name="payment_portmone_entry_preauth_flag" id="payment_portmone_entry_preauth_flag" value="1" checked="checked" />*/
/*                                       {% else %}*/
/*                                           <input type="checkbox" name="payment_portmone_entry_preauth_flag" id="payment_portmone_entry_preauth_flag" value="1" />*/
/*                                       {% endif %}*/
/*                                   </label>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-showlogo">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_showlogo }}">{{ entry_showlogo }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <div class="checkbox">*/
/*                                   <label>*/
/*                                       {% if payment_portmone_entry_showlogo is defined and payment_portmone_entry_showlogo=='1' %}*/
/*                                           <input type="checkbox" name="payment_portmone_entry_showlogo" id="payment_portmone_entry_showlogo" value="1" checked="checked" />*/
/*                                       {% else %}*/
/*                                           <input type="checkbox" name="payment_portmone_entry_showlogo" id="payment_portmone_entry_showlogo" value="1" />*/
/*                                       {% endif %}*/
/*                                   </label>*/
/*                               </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-sort-order">*/
/*                               <span data-toggle="tooltip" title="{{ h_entry_sort_order }}">{{ entry_sort_order }}</span>*/
/*                           </label>*/
/*                           <div class="col-sm-10">*/
/*                               <input type="text" name="payment_portmone_sort_order" value="{{ payment_portmone_sort_order }}" placeholder="{{ h_entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*                   <div class="tab-pane" id="tab-status">*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label">{{ OP_version }}</label>*/
/*                           <div class="col-sm-10">*/
/*                               <div>{{ entry_OP_version }}</div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label">{{ Plugin_version }}</label>*/
/*                           <div class="col-sm-10">*/
/*                               <div>{{ entry_Plugin_version }}</div>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*               </div>*/
/*           </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
