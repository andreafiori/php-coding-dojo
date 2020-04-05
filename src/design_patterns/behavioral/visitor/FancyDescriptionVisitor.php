<?php

class FancyDescriptionVisitor extends Visitor
{
    private $description = NULL;

    /**
     * @return null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param $descriptionIn
     */
    public function setDescription($descriptionIn) {
        $this->description = $descriptionIn;
    }

    /**
     * @param BookVisitee $bookVisitee
     */
    public function visitBook(BookVisitee $bookVisitee) {
        $this->setDescription($bookVisitee->getTitle()
            . '...!*@*! written !*! by !@! ' .  $bookVisitee->getAuthor() );
    }

    /**
     * @param SoftwareVisitee $softwareVisiteeIn
     */
    public function visitSoftware(SoftwareVisitee $softwareVisiteeIn) {
        $this->setDescription($softwareVisiteeIn->getTitle()
            . '...!!! made !*! by !@@! ' .
            $softwareVisiteeIn->getSoftwareCompany()
            . '...www website !**! at http://' .
            $softwareVisiteeIn->getSoftwareCompanyURL());
    }
}