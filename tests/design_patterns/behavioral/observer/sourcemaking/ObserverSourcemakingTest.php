<?php

namespace tests\design_patterns\behavioral\observer\sourcemaking;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\observer\sourcemaking\PatternSubject;
use design_patterns\behavioral\observer\sourcemaking\PatternObserver;

class ObserverSourcemakingTest extends TestCase
{
    /**
     * @var PatternSubject
     */
    private $patternSubject;

    /**
     * @var PatternObserver
     */
    private $patternObserver;

    protected function setUp(): void
    {
        parent::setUp();

        $this->patternSubject = new PatternSubject();
        $this->patternObserver = new PatternObserver();
    }

    public function testNotificationListContainsNotifications()
    {
        $this->_commonArrange();

        $this->_commonAssert();
    }

    public function testFavoritesAfterDetach()
    {
        $this->_commonArrange();

        // Act
        $this->patternSubject->detach($this->patternObserver);
        $this->patternSubject->updateFavorites('abstract factory, observer, paisley');

        $this->_commonAssert();
    }

    private function _commonArrange()
    {
        $this->patternSubject->attach($this->patternObserver);
        $this->patternSubject->updateFavorites('abstract factory, decorator, visitor');
        $this->patternSubject->updateFavorites('abstract factory, observer, decorator');
    }

    private function _commonAssert()
    {
        $notifications = $this->patternSubject->getNotifications();
        $this->assertEquals(count($notifications), 2);
        $this->assertEquals($notifications[1], 'abstract factory, observer, decorator');
    }
}
