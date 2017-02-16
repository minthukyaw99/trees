public function levelOrder($node){
        $left = null;
        $right = null;
        $height = $this->getHeight($node);  
        
        for($i = 0; $i < $height; $i++){
            $this->printTree($node,$i);
        }
    }

    public function printTree($node,$height)
    { 
        if($node == null){
            return;
        }
        
        if($height == 0)
        {
           echo $node->data." ";
        }
        
        if($height > 0) {
            $this->printTree($node->left, $height - 1);
            $this->printTree($node->right, $height - 1);
        }
    }

    public function getHeight($node)
    {
        if($node==null) {
            return 0;
        } else {
            if(isset($node->left)) {
                
                $lheight = $this->getHeight($node->left);
            } else {
                $lheight = 0;
            }
            if(isset($node->right)){
                
                $rheight = $this->getHeight($node->right);
            }else {
                $rheight = 0;
            }
            if($lheight > $rheight) {
                return $lheight + 1;
            }
            return $rheight + 1;
        }
    }
