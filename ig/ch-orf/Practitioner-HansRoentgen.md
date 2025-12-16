# Hans Röntgen - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hans Röntgen**

## Example Practitioner: Hans Röntgen

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000201041, `urn:oid:2.16.756.5.30.1.123.100.2.1.1`/Y604801

**name**: Hans Röntgen 

**telecom**: ph: 044 412 00 99, [hans.roentgen@kantonsspital.ch](mailto:hans.roentgen@kantonsspital.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "HansRoentgen",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000201041"
    },
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
      "value" : "Y604801"
    }
  ],
  "name" : [
    {
      "family" : "Röntgen",
      "given" : ["Hans"],
      "prefix" : ["Dr. med."],
      "_prefix" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "AC"
            }
          ]
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "044 412 00 99"
    },
    {
      "system" : "email",
      "value" : "hans.roentgen@kantonsspital.ch"
    }
  ]
}

```
