# UC 2: Tanja Allesgut @ Geburtsklinik - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Tanja Allesgut @ Geburtsklinik**

## Example PractitionerRole: UC 2: Tanja Allesgut @ Geburtsklinik

Language: de-CH

**practitioner**: [Tanja Allesgut](Bundle-UC2-Document.md#urn-uuid-a61d6a0b-ee42-443e-92e5-167d2e42f137)

**organization**: [Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-fbe019f1-6574-40be-940f-d03da0c743db)

**code**: Arzt/Ärztin

**specialty**: Gynäkologie und Geburtshilfe



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "89029102-999c-4b69-a836-e4dbfbd55527",
  "language" : "de-CH",
  "practitioner" : {
    "reference" : "urn:uuid:a61d6a0b-ee42-443e-92e5-167d2e42f137",
    "display" : "Tanja Allesgut"
  },
  "organization" : {
    "reference" : "urn:uuid:fbe019f1-6574-40be-940f-d03da0c743db",
    "display" : "Geburtsklinik"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "309343006",
          "display" : "Arzt/Ärztin"
        }
      ]
    }
  ],
  "specialty" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
          "code" : "1003",
          "display" : "Gynäkologie und Geburtshilfe"
        }
      ]
    }
  ]
}

```
