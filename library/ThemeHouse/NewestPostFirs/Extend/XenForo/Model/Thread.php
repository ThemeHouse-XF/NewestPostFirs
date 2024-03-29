<?php

/**
 *
 * @see XenForo_Model_Thread
 */
class ThemeHouse_NewestPostFirs_Extend_XenForo_Model_Thread extends XFCP_ThemeHouse_NewestPostFirs_Extend_XenForo_Model_Thread
{

    /**
     * 
     * @param array $post
     * @param array $thread
     * @param array $viewingUser
     * 
     * @return string newest_first or oldest_first
     */
    public function getThreadDisplayOrderForThread(array $thread, array $viewingUser = null)
    {
        $xenOptions = XenForo_Application::get('options');
        
        if ($xenOptions->th_newestPostFirst_userChoice) {
            $this->standardizeViewingUserReference($viewingUser);
            
            if (isset($viewingUser['thread_display_mode']) && $viewingUser['thread_display_mode']) {
                return $viewingUser['thread_display_mode'];
            }
        }
        
        if ($xenOptions->th_newestPostFirst) {
            return 'newest_first';
        }
        
        return 'oldest_first';
    }
}