<?php
namespace App\Controller;

trait CommonTrait
{
    /**
     * sendAjax send ajax
     * @param  string $status       status
     * @param  string $errorMessage error message
     * @return null
     */
    protected function sendAjax($status = null, $errorMessage = '')
    {
    
        $this->viewBuilder()->layout(false);
        $this->autoRender = false;
    
        if ($status !== null) {
            $this->ajaxResponse['status'] = $status;
            $this->ajaxResponse['message'] = $errorMessage;
        }
    
        $this->response->body(json_encode($this->ajaxResponse));
        $this->response->type('json');
        return ;
    }
    
    /**
     * Called when processing a download request
     * @param type $filePath
     * @param type $fileName
     * @param type $validate
     * @return type
     */
    protected function sendFile($filePath, $fileName, $validate = TRUE) {
        if (!$validate || file_exists($filePath)) {
            $this->response->file($filePath, array('download' => true, 'name' => $fileName));
        }
        return $this->response;
    }
    
    protected function isPost() {
        return $this->request->is('post');
    }
    protected function isAjax() {
        return $this->request->is('ajax');
    }
    // when edit
    protected function isPut() {
        return $this->request->is('put');
    }
    
    /*
     * Show info message
     * $params: 'class' should be: 'error', 'success', 'warn' or 'info'
     * */
    protected function setFlash($messages, $params = array('class' => 'error'), $key = 'flash', $element = 'dsblock_message') {
        $msg = is_array($messages) ? implode( "<br/>", array_values( $messages ) ) : $messages;
        $options = [
            'key' => $key,
            'element' => $element,
            'params' => $params
        ];
        $this->Flash->set( $msg, $options );
    }
}