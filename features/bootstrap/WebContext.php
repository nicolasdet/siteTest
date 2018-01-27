<?php 


use Behat\MinkExtension\Context\MinkContext;

class WebContext extends MinkContext
{
	
    /**
     * @When I Wait for :arg1 segonds
     */
    public function iWaitForSegonds2($arg1)
    {
        $this->getSession()->wait($arg1 * 1000);
    }

        /**
     * @When I drag :arg1 to :arg2
     */
    public function iDragTo($arg1, $arg2)
    {


    	$page = $this->getSession()->getPage();
    	$dragged = $page->find('css', $arg1);
    	$target = $page->find('css',$arg2);

    	$dragged->dragTo($target);

    	
    }


      private function performDragAndDrop(Element $element, Element $dropZone)
    {
    	$session = $this->getSession();
        $session = $this->session->getDriver()->getWebDriverSession();

        //this requires a sequence of steps as follows:
//1st find the source and target/destination elements to use as reference to do the drag and drop
        $from = $session->element('xpath',$element->getXpath());
        $to = $session->element('xpath',$dropZone->getXpath());
//now perform drag and drop
        $session->moveto(array('element' => $from->getID())); //move to source location, using reference to source element
        $session->buttondown(""); //click mouse to start drag, defaults to left mouse button
        $session->moveto(array('element' => $to->getID())); //move to target location, using reference to target element
        $session->buttonup(""); //release mouse to complete drag and drop operation
//it may be worthwhile to encapsulate these steps into a function called draganddrop($src,$target), etc.
    }

       /**
     * @When I performDragAndDrop :arg1 :arg2
     */
    public function iPerformdraganddrop($element, $dropZone)
    {

        $session = $this->session->getDriver()->getWebDriverSession();

        //this requires a sequence of steps as follows:
//1st find the source and target/destination elements to use as reference to do the drag and drop
        $from = $session->element('xpath',$element->getXpath());
        $to = $session->element('xpath',$dropZone->getXpath());
//now perform drag and drop
        $session->moveto(array('element' => $from->getID())); //move to source location, using reference to source element
        $session->buttondown(""); //click mouse to start drag, defaults to left mouse button
        $session->moveto(array('element' => $to->getID())); //move to target location, using reference to target element
        $session->buttonup(""); //release mouse to complete drag and drop operation
//it may be worthwhile to encapsulate these steps into a function called draganddrop($src,$target), etc.
    }




}