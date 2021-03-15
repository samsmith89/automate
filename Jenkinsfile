pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                script {
                    if (env.action.contains("closed") && env.merged) {
                        sh 'ssh -T production@209.50.57.210 "cd files/wp-content/themes/automate/scripts && bash deploy.sh"'
                    } else {
                        currentBuild.result = 'SUCCESS';
                        return;
                    }
                }
            }
        }
    }
}