
class Configuration
    export_attr 'Timeout', :from => @timeout

    def initialize
        @timeout = ConfigurationManager.AppSettings['Timeout'].to_i
    end
end

class UsesTimeout
    export 'UsesTimeout'

    import 'Timeout', :into => @timeout

    def do_something
        puts "Timeout is #{@timeout} milliseconds..."
    end
end