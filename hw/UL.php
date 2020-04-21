<?php

class UL extends Li
{
    
    public function html()
    {
        return "\n<ul $this->style $this->class $this->id>\n$this->data</ul> ";
    }
}
