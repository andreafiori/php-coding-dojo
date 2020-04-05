<?php

class PlainDescriptionVisitor extends Visitor {

    private $description = NULL;

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
     * @param BookVisitee $bookVisitee
     * @return $this
     */
    public function visitBook(BookVisitee $bookVisitee) {
        $this->setDescription($bookVisitee->getTitle()
            .' written by ' .  $bookVisitee->getAuthor() );

        return $this;
    }

    /**
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