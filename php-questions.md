PHP
protected with magic call
can call on static

BUT public method ONLY & ONLY call out by object

new self()
new static()
new static???

override trait, CAN't

class use trait as parent
then user extends parent > done
CAN't directly override on trait
it may override through constructor
$this->, but just as last shot