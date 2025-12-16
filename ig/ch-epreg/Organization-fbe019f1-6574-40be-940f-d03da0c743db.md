# UC 2: Geburtsklinik - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Geburtsklinik**

## Example Organization: UC 2: Geburtsklinik

Language: de-CH

**name**: Geburtsklinik 'Willkommen auf der Welt'

**telecom**: [geburtsklinik@example.com](mailto:geburtsklinik@example.com), [+41 79 555 55 55](tel:+41795555555), [+41 55 555 55 55](tel:+41555555555)

**address**: Klinikstrasse 1 Musterhausen 8888 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "fbe019f1-6574-40be-940f-d03da0c743db",
  "language" : "de-CH",
  "name" : "Geburtsklinik 'Willkommen auf der Welt'",
  "telecom" : [
    {
      "system" : "email",
      "value" : "geburtsklinik@example.com"
    },
    {
      "system" : "phone",
      "value" : "+41 79 555 55 55",
      "use" : "mobile"
    },
    {
      "system" : "phone",
      "value" : "+41 55 555 55 55",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "line" : ["Klinikstrasse 1"],
      "city" : "Musterhausen",
      "postalCode" : "8888",
      "country" : "Schweiz"
    }
  ]
}

```
