pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'echo "Hello World"' + env.action + env.merged
                sh '''
                if [ '''env.action''' = "closed" ]
                then
                    if [ '''env.merged''' = "true" ]
                    then
                        echo "built boi"
                    fi
                fi
                '''
            }
        }
    }
}