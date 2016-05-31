<?php 
if($action === "view"){
    if(count($children) > 0){
        return $this->redirect()->toUrl("/backend/deep-feature/" . $featureId);
    }
    if(count($children) === 0){
        return $this->redirect()->toUrl("/backend/post-feature/" . $featureId);
    }
}
if($action === "edit"){
    if(count($children) > 0){
        return $this->redirect()->toUrl("/backend/deep-feature/" . $featureId);
    }
    if(count($children) === 0){
        return $this->redirect()->toUrl("/backend/post-feature/" . $featureId);
    }
}

/**
 * HANDLE IF_ELSE better
 * not let they go too deep @@
 */

$url = "";
if(count($children) > 0){
    $url .= "/backend/deep-feature/" . $featureId;
}
if(count($children) === 0){
    $url .= "/backend/post-feature/" . $featureId;
}
if($action === "view"){
    $url .= "";
}
if($action === "edit"){
    $url .= "/edit";
}
return $this->redirect()->toUrl($url);