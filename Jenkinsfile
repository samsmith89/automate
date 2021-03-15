pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                script {
                    echo 'hello pipeline: '+ env.ref
                }
                sh 'echo "Hello World"' + env.ref
                sh '''
                    echo "Multiline shell steps works too"
                    ls -lah
                '''
            }
        }
    }
}