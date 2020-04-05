<?php

abstract class Visitor
{
    /**
     * @param BookVisitee $bookVisitee
     * @return mixed
     */
    abstract function visitBook(BookVisitee $bookVisitee);

    /**
     * @param SoftwareVisitee $softwareVisitee_In
     * @return mixed
     */
    abstract function visitSoftware(SoftwareVisitee $softwareVisitee_In);
}