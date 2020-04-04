<?php

namespace design_patterns\behavioral\visitor\book;

class SoftwareVisitee extends Visitee
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $softwareCompany;
    /**
     * @var string
     */
    private $softwareCompanyURL;

    /**
     * Set title, software company, and software company URL
     *
     * @param string $title
     * @param string $softwareCompany
     * @param string $softwareCompanyURL
     */
    public function __construct($title, $softwareCompany, $softwareCompanyURL) {
        $this->title = $title;
        $this->softwareCompany = $softwareCompany;
        $this->softwareCompanyURL = $softwareCompanyURL;
    }

    /**
     * Get software company
     *
     * @return mixed
     */
    public function getSoftwareCompany() {
        return $this->softwareCompany;
    }

    /**
     * Get software company URL
     *
     * @return mixed
     */
    public function getSoftwareCompanyURL() {
        return $this->softwareCompanyURL;
    }

    /**
     * Get title
     *
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @inheritDoc
     */
    public function accept(Visitor $visitorIn) {
        $visitorIn->visitSoftware($this);
    }
}
