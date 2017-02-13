/**
Objective 
Today, we're working with Binary Search Trees (BSTs). Check out the Tutorial tab for learning materials and an instructional video!

Task 
The height of a binary search tree is the number of edges between the tree's root and its furthest leaf. You are given a pointer, , pointing to the root of a binary search tree. Complete the getHeight function provided in your editor so that it returns the height of the binary search tree.

Input Format

The locked stub code in your editor reads the following inputs and assembles them into a binary search tree: 
The first line contains an integer, , denoting the number of nodes in the tree. 
Each of the  subsequent lines contains an integer, , denoting the value of an element that must be added to the BST.

Output Format

The locked stub code in your editor will print the integer returned by your getHeight function denoting the height of the BST.

Sample Input

7
3
5
2
1
4
6
7
Sample Output

3
*/
<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }
    
    public function getHeight($root){
        $currentHeight = 1;
        $left = $root->left;
        $right = $root->right;
        
        if($left != null && $right == null) {
            return $this->getHeight($left) + $currentHeight;
        }
        if($right != null && $left == null) {
            return $this->getHeight($right) + $currentHeight;   
        }
        if($left != null && $right != null) {
            $updatedLeft = $this->getHeight($left) + $currentHeight;
            $updatedRight = $this->getHeight($right) + $currentHeight;
            if($updatedLeft > $updatedRight) {
                return $updatedLeft;
            } else {
                return $updatedRight;
            }
        }
        
        return $currentHeight - 1;
    }
    }
    
    $myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$height=$myTree->getHeight($root);
echo $height;
?>
