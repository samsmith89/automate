pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                script {
                    if (env.action.contains("closed")) {
                        echo "first check"
                        if (env.merged) {
                            echo "second check"
                        }
                    }
                }
            }
        }
    }
}