<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCfAJAYr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCfAJAYr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCfAJAYr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCfAJAYr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCfAJAYr\App_KernelDevDebugContainer([
    'container.build_hash' => 'CfAJAYr',
    'container.build_id' => 'dae80c44',
    'container.build_time' => 1592584541,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCfAJAYr');
