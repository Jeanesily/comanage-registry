<?php
/**
 * COmanage Registry Sidebar Search (CO-139)
 * Displayed with sidebar buttons on CO People Canvas
 *
 * Copyright (C) 2015 University Corporation for Advanced Internet Development, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright     Copyright (C) 2015 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v1.0
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

// skip on the index pages, where we've moved searching to the top, but keep on the others
if ($this->action != 'index') {
  if(isset($permissions['search']) && $permissions['search'] ) {
    // Get a pointer to our model
    $model = $this->name;
    if(!empty($this->plugin)) {
      $fileLocation = APP . "Plugin/" . $this->plugin . "/View/" . $model . "/search-side.inc";
      if(file_exists($fileLocation))
        include($fileLocation);
    } else {
      $fileLocation = APP . "View/" . $model . "/search-side.inc";
      if(file_exists($fileLocation))
        include($fileLocation);
    }
  }
}