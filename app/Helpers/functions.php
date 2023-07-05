<?php

if(!function_exists('training_program_file_path')){

    function training_program_file_path(): string
    {
        return '/' . \App\Models\Admin\TrainingProgram::FILE_PATH;
    }

}

