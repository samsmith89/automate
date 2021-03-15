pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                script {
                    if (env.action.contains("closed")) {
                        echo "first check" + env.action + env.merged
                        if (env.merged) {
                            echo "second checks" + env.merged
                        }
                    }
                }
            }
        }
    }
}