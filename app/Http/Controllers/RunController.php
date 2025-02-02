<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
class RunController extends Controller
{
    public function runFile(){
        // preferred role will be entered  and will be multiple
        
        $data = [ 
            101,                  // Employee ID
            "Data Science",       // Department
            "Bachelor's",         // Education
            5,                    // Total Working Years
            3,                    // Recent Years At Company
            2,                    // Years in Current Role
            "Male",               // Gender
            80000,                // Salary
            "Mid-Level",          // Experience Level
        ];  
        
        // Convert the array into a space-separated string to pass as arguments
        $arguments = implode(' ', array_map('escapeshellarg', $data));
        
        // Construct the command with the arguments
        $command = "python C:\\xampp\\htdocs\\career-connect\\public\\employee_dataset.py $arguments";
        

       
    $process = proc_open($command, [
        1 => ['pipe', 'w'], // stdout
        2 => ['pipe', 'w'], // stderr
    ], $pipes);

    if (is_resource($process)) {
        $output = stream_get_contents($pipes[1]); // Get stdout
        $error = stream_get_contents($pipes[2]); // Get stderr

        fclose($pipes[1]);
        fclose($pipes[2]);

        $return_code = proc_close($process); // Close the process

        if ($return_code !== 0) {
            return response()->json(['error' => $error]);  // Return any error
        }

        return response()->json(['output' => $output]);
    }

    return response()->json(['error' => 'Failed to run Python script']);
   
    $pythonScriptPath = public_path('employee_dataset.py');
    $employeeId = 101;
    $department = "Data Science";
    $education = "Bachelor's";
    $totalWorkingYears = 5;
    $recentYearsAtCompany = 3;
    $yearsInCurrentRole = 2;
    $gender = "Male";
    $salary = 80000;
    $experienceLevel = "Mid-Level";
    
    // Construct the command
    $process = new Process([
        'python', 
        $pythonScriptPath, 
        $employeeId, 
        $department, 
        $education, 
        $totalWorkingYears, 
        $recentYearsAtCompany, 
        $yearsInCurrentRole, 
        $gender, 
        $salary, 
        $experienceLevel
    ]);
    
    try {
        // Run the process
        $process->mustRun();
    
        // Get the output
        echo $process->getOutput();
    } catch (ProcessFailedException $exception) {
        // Handle failure
        echo "The process failed: " . $exception->getMessage();
    }
        
        die;
       
    }
}
