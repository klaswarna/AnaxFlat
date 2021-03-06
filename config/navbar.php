<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kursmomenten"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna sida")
            ],

            "test" => [
                "text"  => t("Testsida"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsida")
            ],

            "Vertikalt grid" => [
                "text"  => t("Vertikalt grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Vertikalt grid")
            ],

            "Typografi" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typografi")
            ],

            "Analyser" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser")
            ],

            "Färgteman" => [
                "text"  => t("Färgteman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Färgteman")
            ],

            "Blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg")
            ],

            "Bildtester" => [
                "text"  => t("Bildtester"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bildtester")
            ],

            "Designelement" => [
                "text"  => t("Designelement"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Designelement")
            ],

            "Designprinciper" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Designprinciper")
            ],




        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kursmomenten"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna sida")
            ],

            "test" => [
                "text"  => t("Testsida"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testsida")
            ],

            "Vertikalt grid" => [
                "text"  => t("Vertikalt grid"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Vertikalt grid")
            ],

            "Typografi" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typografi")
            ],

            "Analyser" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser")
            ],

            "Färgteman" => [
                "text"  => t("Färgteman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Färgteman")
            ],

            "Blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg")
            ],

            "Bildtester" => [
                "text"  => t("Bildtester"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bildtester")
            ],

            "Designelement" => [
                "text"  => t("Designelement"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Designelement")
            ],

            "Designprinciper" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Designprinciper")
            ],




        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
