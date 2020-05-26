<?php
class Input
{
    protected $value = '';
    protected $type = 'text';

    public function setType(string $type)
    {
        if (in_array($type, [
            'text',
            'button',
            'submit',
            'reset',
            'password',
            'file',
            'checkbox'
        ])) {
            $this->type = $type;
        }
        return $this;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
        return $this;
    }

    public function setValueType(array $data)
    {
        reset($data);
        $buf = each($data);
        $this->setType($buf['key'])->setValue($buf['value']);
        return $this;
    }

    public function html()
    {
        return "<input type = '$this->type' value = '$this->value'>";
    }
}