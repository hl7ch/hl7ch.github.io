# PIXm Feed Provider Organization Gruppenpraxis - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Feed Provider Organization Gruppenpraxis**

## Example Organization: PIXm Feed Provider Organization Gruppenpraxis

Profile: [CH PIXm Feed Organization](StructureDefinition-ch-pixm-feed-organization.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.999.1.2.3.4

**name**: PDQm Provider Organization Gruppenpraxis

**telecom**: [+41322345566](tel:+41322345566), fax: +41322346677(Work), [bereit@gruppenpraxis.ch](mailto:bereit@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Doktorgasse 2 Musterhausen 8888 CH (work)

### Contacts

| | |
| :--- | :--- |
| - | **Name** |
| * | Allzeit Bereit (Official) |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "GruppenpraxisCH",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-feed-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.999.1.2.3.4"
    }
  ],
  "name" : "PDQm Provider Organization Gruppenpraxis",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41322345566",
      "use" : "work"
    },
    {
      "system" : "fax",
      "value" : "+41322346677",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "bereit@gruppenpraxis.ch",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "http://www.gruppenpraxis.ch",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "use" : "work",
      "line" : ["Doktorgasse", "2"],
      "city" : "Musterhausen",
      "postalCode" : "8888",
      "country" : "CH"
    }
  ],
  "contact" : [
    {
      "name" : {
        "use" : "official",
        "family" : "Bereit",
        "given" : ["Allzeit"],
        "prefix" : ["Dr. med."],
        "suffix" : ["Facharzt für Allgemeine Medizin"]
      }
    }
  ]
}

```
