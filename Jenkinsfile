pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                script {
                    if (env.action == "closed") {
                        if (env.merged == true) {
                            echo "built"
                        }
                    }
                }
            }
        }
    }
}