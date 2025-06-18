<?php

return [
    'enabled' => env('HYBRID_RAG_RETRIEVER_ENABLED', true),
    'timeout' => env('HYBRID_RAG_RETRIEVER_TIMEOUT', 30),
    'log_channel' => env('HYBRID_RAG_RETRIEVER_LOG', 'stack'),
];
