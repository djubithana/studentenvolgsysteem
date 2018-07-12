package sr.havo1.webapp.studentenvolgsysteem;

import javax.ws.rs.ApplicationPath;
import javax.ws.rs.core.Application;
import java.util.HashMap;
import java.util.Map;

/**
 * Created by DENCIO on 6/11/2018.
 */

@ApplicationPath("api")
public class ApplicationConfig extends Application{

    @Override
    public Map<String, Object> getProperties() {
        Map<String, Object> properties = new HashMap<String, Object>();
        properties.put("jersey.config.server.provider.packages", "sr.havo1.webapp.studentenvolgsysteem.controller");
        return properties;
    }

}
