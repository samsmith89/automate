pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                script {
                    if (env.action.contains("closed") && env.merged) {
                        echo "working" + env.action + env.merged
                    }
                }
            }
        }
    }
}