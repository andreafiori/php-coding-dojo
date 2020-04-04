<?php

namespace design_patterns\behavioral\visitor\book;

class PlainDescriptionVisitor extends Visitor
{
    /**
     * @var null
     */
    private $description = null;

    /**
     * @return null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $descriptionIn
     */
    public function setDescription($descriptionIn) {
        $this->description = $descriptionIn;
    }

    /**
     * Visit Book
     *
     * @param BookVisitee $bookVisitee
     * @return $this
     */
    public function visitBook(BookVisitee $bookVisitee) {
        $this->setDescription($bookVisitee->getTitle()
            .' written by ' .  $bookVisitee->getAuthor() );

        return $this;
    }

    /**
     * Visit Software
     *
     * @param SoftwareVisitee $softwareVisiteeIn
     * @return $this
     */
    public function visitSoftware(SoftwareVisitee $softwareVisiteeIn) {
        $this->setDescription($softwareVisiteeIn->getTitle()
            . ' made by ' . $softwareVisiteeIn->getSoftwareCompany()
            . ' website at ' . $softwareVisiteeIn->getSoftwareCompanyURL() );

        return $this;
    }
}