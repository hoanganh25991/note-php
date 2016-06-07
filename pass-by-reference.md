#reference-object
when reference by OBJECT

we can `get out` value modified by function scope

```
 private function validateInfo($field, $stepData, $validator, $validateInfo){
        if(!$validator->isValid($stepData[$field])){
            $validateInfo["isValid"] = false;
            $validateInfo["stepId"] = $stepData["stepId"];
            $validateInfo["fieldId"] = $stepData["itemsId"][$field];
            $validateInfo["msg"] = array_values($validator->getMessages())[0];
            return false;
        }
        return true;
    }
```
>some where, we call `validateInfo()`
```
$validateInfo = [something];
$this->validateInfo($field, $stepData, $notEmpty, $validateInfo);
```
>$validateInfo = ?, after function invoked?

>NOTHING, if $validateInfo is array()

>MODIFIED, if $validateInfo is object

>coclusion:
```
literal `copied` into function-scope
object `maintain` reference
```